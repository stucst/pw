<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>用户信息管理</title>
</head>
<body>
<center>
    <h3>学生信息管理</h3>
<a href="/th3-2/index.php/Home/Index/index">返回首页</a>
<a href="/th3-2/index.php/Home/User/index">浏览用户信息</a>
<a href="/th3-2/index.php/Home/User/add">添加用户信息</a>
<hr/>
    <h3>添加用户信息</h3>
    <form action="/th3-2/index.php/Home/User/insert" method="post">
        <input type="hidden" name="id " value="<?php echo ($vo["id"]); ?>">
        <table width="260" border="0">
            <tr>
                <td>账号：</td>
                <td><input type="text" name="username"  ></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="userpass"  ></td>
            </tr>
            <tr>
                <td>确认密码：</td>
                <td><input type="password" name="reuserpass"  ></td>
            </tr>
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name"  "></td>
            </tr>
            <tr>
                <td>email地址：</td>
                <td><input type="text" name="email"  ></td>
            </tr>


            <tr>

                <td colspan="2" align="center">
                    <input type="submit"  value="添加">
                    <input type="reset" value="重置">
                </td>
            </tr>

        </table>
    </form>
</center>

</body>
</html>