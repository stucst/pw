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
    <h4>浏览用户信息</h4>
    <table width="700" border="1">
        <tr>
            <th>id号</th>
            <th>账号</th>
            <th>真实姓名</th>
            <th>email地址</th>
            <th>添加时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["username"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
                <td><?php echo ($vo["email"]); ?></td>
                <td><?php echo ($vo["addtime"]); ?></td>
                <td><?php echo ($vo["state"]); ?></td>
                <td>
                    <a href="/th3-2/index.php/Home/User/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                    <a href="/th3-2/index.php/Home/User/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
                </td>

            </tr><?php endforeach; endif; ?>
    </table>
</center>

</body>
</html>