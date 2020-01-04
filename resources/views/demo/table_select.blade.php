<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>table下拉选择器</title>
    <link rel="stylesheet" href="/plugins/layui-v2.5.4/css/layui.css" media="all">
    <link rel="stylesheet" href="/css/public.css" media="all">
</head>
<body>
<div class="layuimini-container">
    <div class="layuimini-main">

        <blockquote class="layui-elem-quote">
            table下拉选择器使用开源项目：TableSelect<br>
            在开源的基础上修改支持多条件搜索、宽以及高的自定义<br>
            <a href="https://gitee.com/lolicode/layui_component_tableselect" target="_blank" class="layui-btn layui-btn-danger">TableSelect</a>
        </blockquote>

        <form class="layui-form" action="" style="padding:20px;">
            <div class="layui-form-item">
                <label class="layui-form-label">多选</label>
                <div class="layui-input-inline">
                    <input type="text" name="" placeholder="请输入" autocomplete="off" class="layui-input" id="demo" value="刘晓军,张恒" ts-selected="002,003">
                </div>
                <div class="layui-form-mid layui-word-aux">本地演示数据，分页选中和其他页一样，这不是BUG</div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">单选</label>
                <div class="layui-input-inline">
                    <input type="text" name="" placeholder="请输入" autocomplete="off" class="layui-input" id="demo2">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">多搜索条件</label>
                <div class="layui-input-inline">
                    <input type="text" name="" placeholder="请输入" autocomplete="off" class="layui-input" id="demo3">
                </div>
            </div>

        </form>

        <pre class="layui-code">

            //开始使用
            var tableSelect = layui.tableSelect;
            tableSelect.render({
                elem: '#demo',	//定义输入框input对象 必填
                checkedKey: 'id', //表格的唯一建值，非常重要，影响到选中状态 必填
                searchKey: 'keyword',	//搜索输入框的name值 默认keyword
                searchPlaceholder: '关键词搜索',	//搜索输入框的提示文字 默认关键词搜索
                height:'400',  //自定义高度
                width:'900',  //自定义宽度
                table: {	//定义表格参数，与LAYUI的TABLE模块一致，只是无需再定义表格elem
                    url:'',
                    cols: [[]]
                },
                done: function (elem, data) {
                //选择完后的回调，包含2个返回值 elem:返回之前input对象；data:表格返回的选中的数据 []
                //拿到data[]后 就按照业务需求做想做的事情啦~比如加个隐藏域放ID...
                }
            })

            //默认值
            只需要在触发input上添加 ts-selected="1,2,3" 属性即可 值需与checkedKey对应

            //多条件搜索
            tableSelect.render({
                elem: '#demo3',
                checkedKey: 'id',
                searchType: 'more', //开启多条件搜索
                searchList: [
                    {searchKey: 'name', searchPlaceholder: '搜索用户姓名'}, //搜索条件1
                    {searchKey: 'sex', searchPlaceholder: '搜索用户性别'},  //搜索条件2
                ],
                table: {
                    url: '/api/tableSelect.json',
                    cols: [[
                        { type: 'radio' },
                        { field: 'id', title: 'ID' },
                        { field: 'username', title: '姓名' },
                        { field: 'sex', title: '性别' }
                    ]]
                },
                done: function (elem, data) {
                //选择完后的回调，包含2个返回值 elem:返回之前input对象；data:表格返回的选中的数据 []
                //拿到data[]后 就按照业务需求做想做的事情啦~比如加个隐藏域放ID...
                }
            })
        </pre>

    </div>
</div>

<script src="/plugins/layui-v2.5.4/layui.js" charset="utf-8"></script>
<script src="/js/lay-config.js?v=1.0.4" charset="utf-8"></script>
<script>
    layui.use(['table', 'form', 'tableSelect'], function () {
        var $ = layui.jquery,
            table = layui.table,
            form = layui.form,
            tableSelect = layui.tableSelect;

        tableSelect.render({
            elem: '#demo',
            searchKey: 'my',
            checkedKey: 'id',
            searchPlaceholder: '自定义文字和name',
            table: {
                url: '/api/tableSelect.json',
                cols: [[
                    { type: 'checkbox' },
                    { field: 'id', title: 'ID', width: 100 },
                    { field: 'username', title: '姓名', width: 300 },
                    { field: 'sex', title: '性别', width: 100 }
                ]]
            },
            done: function (elem, data) {
                var NEWJSON = []
                layui.each(data.data, function (index, item) {
                    NEWJSON.push(item.username)
                })
                elem.val(NEWJSON.join(","))
            }
        })


        tableSelect.render({
            elem: '#demo2',
            checkedKey: 'id',
            table: {
                url: '/api/tableSelect.json',
                cols: [[
                    { type: 'radio' },
                    { field: 'id', title: 'ID' },
                    { field: 'username', title: '姓名' },
                    { field: 'sex', title: '性别' }
                ]]
            },
            done: function (elem, data) {
                var NEWJSON = []
                layui.each(data.data, function (index, item) {
                    NEWJSON.push(item.username)
                })
                elem.val(NEWJSON.join(","))
            }
        })


        tableSelect.render({
            elem: '#demo3',
            checkedKey: 'id',
            height:'400',
            width:'900',
            searchType: 'more',
            searchList: [
                {searchKey: 'name', searchPlaceholder: '搜索用户姓名'},
                {searchKey: 'sex', searchPlaceholder: '搜索用户性别'},
            ],
            table: {
                url: '/api/tableSelect.json',
                cols: [[
                    { type: 'radio' },
                    { field: 'id', title: 'ID' },
                    { field: 'username', title: '姓名' },
                    { field: 'sex', title: '性别' }
                ]]
            },
            done: function (elem, data) {
                var NEWJSON = []
                layui.each(data.data, function (index, item) {
                    NEWJSON.push(item.username)
                })
                elem.val(NEWJSON.join(","))
            }
        })

    });
</script>
</body>
</html>
