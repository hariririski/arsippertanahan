
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Beranda</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
      <?php echo $this->load->view('share/mobilemenu', '', TRUE);?>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
      <?php echo $this->load->view('share/profile', '', TRUE);?>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <?php echo $this->load->view('share/dekstopmenu', '', TRUE);?>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            CKEditor
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Simple Editor
                                    </h2>
                                </div>
                                <div class="p-5" id="simple-editor">
                                    <div class="preview">
                                        <div data-simple-toolbar="true" class="editor">
                                            <p>Content of the editor.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Simple Editor -->
                        <!-- BEGIN: Standard Editor -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Standard Editor
                                    </h2>
                                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-2">Show example code</label>
                                        <input data-target="#standard-editor" class="show-code form-check-switch mr-0 ml-3" type="checkbox" id="show-example-2">
                                    </div>
                                </div>
                                <div class="p-5" id="standard-editor">
                                  <?php $kode = "11-1-10071-1121-1-087654-12345"; ?>
                                  <h3>Ini render QRcode</h3>
                                  <img src="<?php echo site_url('Code/QRcode/'.$kode); ?>" alt="">
                                  <p><h3>Ini render Barcode</h3></p>
                                  <img src="<?php echo site_url('Code/Barcode/'.$kode); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- END: Standard Editor -->
                        <!-- BEGIN: Inline Editor -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Inline Editor
                                    </h2>
                                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-3">Show example code</label>
                                        <input data-target="#inline-editor" class="show-code form-check-switch mr-0 ml-3" type="checkbox" id="show-example-3">
                                    </div>
                                </div>
                                <div class="p-5" id="inline-editor">
                                    <div class="preview">
                                        <div data-editor="inline" class="editor">
                                            <p>Content of the editor.</p>
                                        </div>
                                    </div>
                                    <div class="source-code hidden">
                                        <button data-target="#copy-inline-editor" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                        <div class="overflow-y-auto mt-3 rounded-md">
                                            <pre class="source-preview" id="copy-inline-editor"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv data-editor=&quot;inline&quot; class=&quot;editor&quot;HTMLCloseTag HTMLOpenTagpHTMLCloseTagContent of the editor.HTMLOpenTag/pHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Inline Editor -->
                        <!-- BEGIN: Balloon Editor -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Balloon Editor
                                    </h2>
                                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-4">Show example code</label>
                                        <input data-target="#balloon-editor" class="show-code form-check-switch mr-0 ml-3" type="checkbox" id="show-example-4">
                                    </div>
                                </div>
                                <div class="p-5" id="balloon-editor">
                                    <div class="preview">
                                        <div data-editor="balloon" class="editor">
                                            <p>Content of the editor.</p>
                                        </div>
                                    </div>
                                    <div class="source-code hidden">
                                        <button data-target="#copy-balloon-editor" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                        <div class="overflow-y-auto mt-3 rounded-md">
                                            <pre class="source-preview" id="copy-balloon-editor"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv data-editor=&quot;balloon&quot; class=&quot;editor&quot;HTMLCloseTag HTMLOpenTagpHTMLCloseTagContent of the editor.HTMLOpenTag/pHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Balloon Editor -->
                        <!-- BEGIN: Document Editor -->
                        <div class="col-span-12">
                            <div class="box">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Document Editor
                                    </h2>
                                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-5">Show example code</label>
                                        <input data-target="#document-editor" class="show-code form-check-switch mr-0 ml-3" type="checkbox" id="show-example-5">
                                    </div>
                                </div>
                                <div class="p-5" id="document-editor">
                                    <div class="preview">
                                        <div data-editor="document" class="editor document-editor">
                                            <div class="document-editor__toolbar"></div>
                                            <div class="document-editor__editable-container">
                                                <div class="document-editor__editable">
                                                    <p>Content of the editor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="source-code hidden">
                                        <button data-target="#copy-document-editor" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                        <div class="overflow-y-auto mt-3 rounded-md">
                                            <pre class="source-preview" id="copy-document-editor"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv data-editor=&quot;document&quot; class=&quot;editor document-editor&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;document-editor__toolbar&quot;HTMLCloseTagHTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;document-editor__editable-container&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;document-editor__editable&quot;HTMLCloseTag HTMLOpenTagpHTMLCloseTagContent of the editor.HTMLOpenTag/pHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Document Editor -->
                    </div>
                </div>
                <!-- END: Content -->
            </div>
        </div>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
