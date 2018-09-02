<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"F:\phpstudy\WWW\fastadmin\public/../application/admin\view\article\index.html";i:1535792890;s:68:"F:\phpstudy\WWW\fastadmin\application\admin\view\layout\default.html";i:1535767994;s:65:"F:\phpstudy\WWW\fastadmin\application\admin\view\common\meta.html";i:1535768108;s:67:"F:\phpstudy\WWW\fastadmin\application\admin\view\common\script.html";i:1535768116;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/fastadmin/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/fastadmin/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/fastadmin/public/assets/js/html5shiv.js"></script>
  <script src="/fastadmin/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                
    <head>
        <meta charset="utf-8" />
        <title>Using require.js - Editor.md examples</title>
        <link rel="stylesheet" href="/fastadmin/public//assets/libs/editormd/examples/css/style.css" />
        <link rel="stylesheet" href="/fastadmin/public//assets/libs/editormd/lib/codemirror/codemirror.min.css" /> 
        <link rel="stylesheet" href="/fastadmin/public//assets/libs/editormd/css/editormd.min.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <div id="layout">
           
            <div class="btns">
                <button id="show-btn">展开编辑器</button>
                <button id="hide-btn">隐藏编辑器</button>
                <button id="get-md-btn">Get Markdown</button>
                <button id="get-html-btn">Get HTML</button>
                <button id="watch-btn">预览</button>
                <button id="unwatch-btn">不预览</button>
                <button id="preview-btn">预览HTML页面(Press Shift + ESC cancel)</button>
                <button id="fullscreen-btn">全屏 (ESC退出全屏)</button>
                <button id="show-toolbar-btn">显示导航栏</button>
                <button id="close-toolbar-btn">显示导航栏</button>
                <button id="toc-menu-btn">ToC Dropdown menu</button>
                <button id="toc-default-btn">ToC default</button>
            </div>
            <div id="article-content"></div>
        </div>   
        <script src="/fastadmin/public//assets/js/require.min.js"></script>

        <script type="text/javascript">            
            requirejs.config({
                baseUrl: "/fastadmin/public//assets/libs/editormd/lib/",
                paths: {
                    jquery          : "/fastadmin/public//assets/libs/editormd/examples/js/jquery.min",
                    marked          : "marked.min",
                    prettify        : "prettify.min",
                    raphael         : "raphael.min",
                    underscore      : "underscore.min",
                    sequenceDiagram : "sequence-diagram.min",
                    katex           : "/fastadmin/public//assets/libs/editormd/examples/js/katex.min",
                    editormd        : "/fastadmin/public//assets/libs/editormd/editormd.amd" // Using Editor.md amd version for Require.js
                },
                waitSeconds: 30
            });
            
            var deps = [
                "editormd", 
                "/fastadmin/public//assets/libs/editormd/plugins/link-dialog/link-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/reference-link-dialog/reference-link-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/image-dialog/image-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/code-block-dialog/code-block-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/table-dialog/table-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/emoji-dialog/emoji-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/goto-line-dialog/goto-line-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/help-dialog/help-dialog.js",
                "/fastadmin/public//assets/libs/editormd/plugins/html-entities-dialog/html-entities-dialog.js", 
                "/fastadmin/public//assets/libs/editormd/plugins/preformatted-text-dialog/preformatted-text-dialog.js"
            ];
            
            var testEditor;
                
            require(deps, function(editormd) {
                
                // if enable codeFold
                // or <link rel="stylesheet" href="../lib/codemirror/addon/fold/foldgutter.css" />
                editormd.loadCSS("/fastadmin/public//assets/libs/editormd/lib/codemirror/addon/fold/foldgutter");
                
                function markdown_text(md) {
                    testEditor = editormd("article-content", {
                        width: "90%",
                        height: 640,
                        path : '/fastadmin/public//assets/libs/editormd/lib/',
                        markdown : md,
                        codeFold : true,
                        searchReplace : true,
                        saveHTMLToTextarea : true,                // 保存HTML到Textarea
                        htmlDecode : "style,script,iframe|on*",       // 开启HTML标签解析，为了安全性，默认不开启    
                        emoji : true,
                        taskList : true,
                        tex : true,
                        tocm            : true,         // Using [TOCM]
                        autoLoadModules : false,
                        previewCodeHighlight : true,
                        sequenceDiagram : true,
                        //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
                        //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
                        //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
                        //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
                        //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
                        imageUpload : true,
                        imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                        imageUploadURL : "./php/upload.php",
                        onload : function() {
                            // console.log('onload', this);
                            //this.fullscreen();
                            //this.unwatch();
                            //this.watch().fullscreen();

                            //this.setMarkdown("#PHP");
                            //this.width("100%");
                            //this.height(480);
                            //this.resize("100%", 640);
                        }
                    });
                }
                markdown_text('<h1>test</h1>')

                $("#show-btn").bind('click', function(){
                    testEditor.show();
                });

                $("#hide-btn").bind('click', function(){
                    testEditor.hide();
                });

                $("#get-md-btn").bind('click', function(){
                    alert(testEditor.getMarkdown());
                });

                $("#get-html-btn").bind('click', function() {
                    alert(testEditor.getHTML());
                });                

                $("#watch-btn").bind('click', function() {
                    testEditor.watch();
                });                 

                $("#unwatch-btn").bind('click', function() {
                    testEditor.unwatch();
                });              

                $("#preview-btn").bind('click', function() {
                    testEditor.previewing();
                });

                $("#fullscreen-btn").bind('click', function() {
                    testEditor.fullscreen();
                });

                $("#show-toolbar-btn").bind('click', function() {
                    testEditor.showToolbar();
                });

                $("#close-toolbar-btn").bind('click', function() {
                    testEditor.hideToolbar();
                });
                
                $("#toc-menu-btn").click(function(){
                    testEditor.config({
                        tocDropdown   : true,
                        tocTitle      : "目录 Table of Contents",
                    });
                });
                
                $("#toc-default-btn").click(function() {
                    testEditor.config("tocDropdown", false);
                });
            });
        </script>
    </body>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/fastadmin/public/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/fastadmin/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>