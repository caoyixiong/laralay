<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>颜色选择器</title>
    <link rel="stylesheet" href="/plugins/layui-v2.5.4/css/layui.css" media="all">
    <link rel="stylesheet" href="/css/public.css" media="all">
</head>
<body>
<div class="layuimini-container">
    <div class="layuimini-main">

        <blockquote class="layui-elem-quote">
            颜色选择器使用开源项目：paigusu<br>
            <a href="http://www.jq22.com/jquery-info20030" target="_blank" class="layui-btn layui-btn-danger">TableSelect</a>
        </blockquote>

        <form class="layui-form" action="" style="padding:20px;">
            <div class="layui-form-item">
                <label class="layui-form-label">颜色选择器</label>
                <div class="layui-input-inline">
                    <input type="hidden" name="test_color" value="#1aa094">
                    <span class="layui-btn layui-btn-primary test-select-color" style="padding:0 12px;min-width:45px;background-color: #1aa094;"></span>
                </div>
            </div>
        </form>

        <pre class="layui-code">
    $(function () {
        $('.paigusu').paigusu({
            color: '#1926dc',//初始色  支持两种配置方案
        }, function (event, obj) {
            console.log(event);
            console.log(obj);
            $(event).css('color', '#' + obj.hex)
        });
    });
        </pre>
    </div>
</div>
<script src="/plugins/layui-v2.5.4/layui.js" charset="utf-8"></script>
<script src="/plugins/jquery-3.4.1/jquery-3.4.1.min.js" charset="utf-8"></script>
<script src="/plugins/jq-module/paigusu.min.js" charset="utf-8"></script>
<script>
    $(function () {
        $('.test-select-color').paigusu({
            color: '#1aa094',//初始色  支持两种配置方案
        }, function (event, obj) {
            console.log(event);
            console.log(obj);
            $(event).css('background-color', '#' + obj.hex);
            $('input[name="test_color"]').val('#' + obj.hex);
        });
    });
</script>
</body>
</html>