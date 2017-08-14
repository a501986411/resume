/**
 * Created by knight on 2017/8/9.
 */
var layui_module = {};
layui.use([
    'form',
    'element',
    'laypage',
    'layer',

],function(){
    layui_module.elem = layui.element;
    layui_module.layer = layui.layer;
    layui_module.form = layui.form;
    layui_module.page =  layui.laypage;
});

