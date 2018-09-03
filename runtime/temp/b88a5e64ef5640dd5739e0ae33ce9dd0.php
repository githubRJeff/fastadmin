<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:91:"/Users/blackrun/1.code/gitpro/fastadmin/public/../application/admin/view/article/index.html";i:1535965764;s:82:"/Users/blackrun/1.code/gitpro/fastadmin/application/admin/view/layout/default.html";i:1535939041;s:79:"/Users/blackrun/1.code/gitpro/fastadmin/application/admin/view/common/meta.html";i:1535939041;s:81:"/Users/blackrun/1.code/gitpro/fastadmin/application/admin/view/common/script.html";i:1535939041;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/gitpro/fastadmin/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/gitpro/fastadmin/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/gitpro/fastadmin/public/assets/js/html5shiv.js"></script>
  <script src="/gitpro/fastadmin/public/assets/js/respond.min.js"></script>
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
        <link rel="stylesheet" href="/gitpro/fastadmin/public//assets/libs/editormd/css/style.css" />
        <link rel="stylesheet" href="/gitpro/fastadmin/public//assets/libs/editormd/lib/codemirror/codemirror.min.css" /> 
        <link rel="stylesheet" href="/gitpro/fastadmin/public//assets/libs/editormd/css/editormd.min.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <form action="article/editArticle" method="post">
            <div id="layout">
               
                <div class="editormd-btns">
                    <button id="watch-btn" class="fa fa-eye">开启实时预览</button>
                    <button id="unwatch-btn" class="fa fa-eye-slash">关闭实时预览</button>
                    <button id="preview-btn" class="fa fa-desktop">全屏预览</button>
                    <button id="fullscreen-btn" class="fa fa-arrows-alt">全屏编辑(ESC退出全屏)</button>
                 <!--    <button id="show-toolbar-btn">显示工具栏</button>
                    <button id="close-toolbar-btn">不显示工具栏</button> -->
                   
                </div>
                <div class="article-title">
                    <input name="article-title" class="form-control" type="text" placeholder="请输入标题">
                </div>
                <div id="article-content"></div>
            </div>
            <!-- <div class="article-requires"> -->
                <button type="submit" class="btn btn-success btn-add  btn-embossed">提交</button> 
            <!-- </div> -->
        </form>   
        <script src="/gitpro/fastadmin/public//assets/js/require.min.js"></script>

        <script type="text/javascript">            
            requirejs.config({
                baseUrl: "/gitpro/fastadmin/public//assets/libs/editormd/lib/",
                paths: {
                    jquery          : "/gitpro/fastadmin/public//assets/libs/editormd/js/jquery.min",
                    marked          : "marked.min",
                    prettify        : "prettify.min",
                    raphael         : "raphael.min",
                    underscore      : "underscore.min",
                    sequenceDiagram : "sequence-diagram.min",
                    katex           : "/gitpro/fastadmin/public//assets/libs/editormd/js/katex.min",
                    editormd        : "/gitpro/fastadmin/public//assets/libs/editormd/editormd.amd" // Using Editor.md amd version for Require.js
                },
                waitSeconds: 30
            });
            
            var deps = [
                "editormd", 
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/link-dialog/link-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/reference-link-dialog/reference-link-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/image-dialog/image-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/code-block-dialog/code-block-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/table-dialog/table-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/emoji-dialog/emoji-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/goto-line-dialog/goto-line-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/help-dialog/help-dialog.js",
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/html-entities-dialog/html-entities-dialog.js", 
                "/gitpro/fastadmin/public//assets/libs/editormd/plugins/preformatted-text-dialog/preformatted-text-dialog.js"
            ];
            
            var testEditor;
                
            require(deps, function(editormd) {
                
                editormd.loadCSS("/gitpro/fastadmin/public//assets/libs/editormd/lib/codemirror/addon/fold/foldgutter");
                
                function markdown_text(md) {
                    testEditor = editormd("article-content", {
                        width: "90%",
                        height: 640,
                        path : '/gitpro/fastadmin/public//assets/libs/editormd/lib/',
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
                        imageUploadURL : "article/uploadImg",
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
                markdown_text('<p><h1>test</h1><br>good<br>test<hr>');

                $("#watch-btn").bind('click', function() {
                    testEditor.watch();
                    return false;
                });                 

                $("#unwatch-btn").bind('click', function() {
                    testEditor.unwatch();
                    return false;
                });              

                $("#preview-btn").bind('click', function() {
                    testEditor.previewing();
                    return false;
                });

                $("#fullscreen-btn").bind('click', function() {
                    testEditor.fullscreen();
                    return false;
                });

                $("#show-toolbar-btn").bind('click', function() {
                    testEditor.showToolbar();
                    return false;
                });

                $("#close-toolbar-btn").bind('click', function() {
                    testEditor.hideToolbar();
                    return false;
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
        <script src="/gitpro/fastadmin/public/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/gitpro/fastadmin/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>