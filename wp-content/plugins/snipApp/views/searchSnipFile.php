<style>
    .k-edit-form-container {
        position: relative;
        width: auto;
    }
    .k-edit-form-container .k-edit-buttons {
        border-style: solid;
        border-width: 1px 0 0;
        bottom: 0;
        clear: both;
        padding: 0.6em;
        position: relative;
        text-align: right;
    }
    
    
</style>
<div class="k-block">
    
    <div id="horizontal"  style="height: 567px;">
        <div>
            <div class="pane-content">
                <div id="treeview" class="demo-section"></div>
            </div>
        </div>
        <div>
            <div class="pane-content2">
                <div id='snipFileLoadingContainer' style="display: none;">
                    <img src="wp-content/plugins/snipApp/includes/images/loading.gif"/>
                </div>
                <div id="listView">
                </div>
                <div id="readPDF" class="readPDF">
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="<?=$treeUrl?>" id="folderTreeUrl"/>
<input type="hidden" value="<?=$snipApiUrl?>" id="snipApiUrl"/>

<script type="text/x-kendo-template" id="template">
    <div class="product">
        <img src="" alt="#: name # image" />
        <h3>#:name#</h3>
    </div>
</script>
<script>
    var serviceRoot = "";
    var folderTreeUrl = $('#folderTreeUrl').val();
</script>


