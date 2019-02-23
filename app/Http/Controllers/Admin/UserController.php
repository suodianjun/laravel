<?php

namespace App\Http\Controllers\Admin;

use App\Libs\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    //封装table
    private $_db;

    public function __construct()
    {
        $this->_db = DB::table('user');
    }

    public function index()
    {
//        $res = $this->_db->where('id',11)->value('username');
//        $res = $this->_db->count('id');
//        dd($res);
        //查询一列数据,第二个参数可选字段
//        $columns = DB::table('user')->pluck('username','id');
//        dump($columns);
        //组织sql
//        $sql = "select * from web_user;";
//        $data = DB::select($sql);
        $count = $this->_db->count();
        $page = new Page($count, 5);
        $offset = $page->offset;
        $limit = $page->size;
        $pagehtml = $page->fpage();
//        dump($limit);
        //DB构建器
        $data = $this->_db->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();
//        dd($data);
        // 当数据为空时，页面显示暂无数据
//        $data = [];
        //分配数据到模板
        return view('admin.user.index', compact('data', 'pagehtml'));
    }

    public function add()
    {
        //用户添加页面
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        $rule = [
          'username'=>'required|min:2|unique:user|web71_username',
//            密码
            'password'=>'required|min:2|confirmed',
            //确认密码
            'password_confirmation'=>'required|min:2',
            //验证邮箱
            'email'=>'email'
        ];
//        $message = [
//            'username.required'=>'用户名不能为空哦',
//            'username.min'=>'密码长度必须大于两位',
//            'username.unique'=>'用户名已经存在了哦',
//            'username.web71_username'=>'请不要输入关键字'
//        ];
        $this->validate($request,$rule);
        //添加认证
        dd($request->except([]));
//        $sql = "insert into web_user (username,password,email) VALUE (:username,:password,:email)";
//        $input = $request->except(['_token']);
//        $res = DB::insert($sql, $input);
        $input = $request->except(['_token']);
        $ret = $this->_db->insertGetId($input);
        //用户保存动作
//        dd($input);
        dd($ret);
    }

    public function edit(Request $request, int $id)
    {
        if ($request->isMethod('put')) {
            $input = $request->except(['_token', '_method']);
//            dd($input);
            $input['id'] = $id;
            //预处理语句
            $sql = "update web_user set username=:username,password=:password,email=:email where id=:id";
            //返回受影响行数
            $res = DB::update($sql, $input);
//           dd($res);
            //进行页面跳转
            return redirect(route('admin.user.index'));
        }
        //组织sql查询修改信息
//        $sql = "select * from web_user where id=:id";
//        $data = DB::selectOne($sql,[':id'=>$id]);
        $data = $this->_db->where('id', $id)->first();
//        dd($data);
        return view('admin.user.edit', compact('data'));
    }

//标量声明
    public function delete(int $id)
    {
        //组织sql
        $sql = "delete from web_user where id=:id";
        //执行sql
        $res = DB::delete($sql, ['id' => $id]);
        if ($res) {
            return [
                'status' => 0,
                'msg' => '删除成功'
            ];
        } else {
            return [
                'status' => 1,
                'msg' => '删除失败'
            ];
        }
    }
}
