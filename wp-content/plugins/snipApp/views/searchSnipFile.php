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
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="<?=$treeUrl?>" id="folderTreeUrl"/>

<script type="text/x-kendo-template" id="template">
    <div class="product">
        <img src="" alt="#: name # image" />
        <h3>#:name#</h3>
    </div>
</script>
<script>
    var serviceRoot = "";
    var folderTreeUrl = $('#folderTreeUrl').val();
    console.log(folderTreeUrl);
    function onSelect(e) {
        $('#snipFileLoadingContainer').show();
        var dataSource;
        var treeview = $("#treeview").data("kendoTreeView");
        var dataItem = treeview.dataItem(e.node);
        $("#listView").kendoListView({
            dataSource: dataSource,
            selectable: "multiple",
            template: kendo.template($("#template").html())
        });
        $.ajax({
            url: 'wp-content/plugins/snipApp/ajax/getFilesByFolderId.php',
            dataType: "html", 
            type: "post",
            data: {'folderId':dataItem.id},
            success: function(html){
                $('#listView').html(html);
                $('#snipFileLoadingContainer').hide();
            },
        });
    }
    
    
</script>

<style scoped>
    .demo-section {

    }
    #listView {
        padding: 10px;
        margin-bottom: -1px;
        min-width: 555px;
        min-height: 510px;
    }
    .product {
        float: left;
        position: relative;
        width: 111px;
        height: 170px;
        margin: 0;
        padding: 0;
    }
    .product img {
        width: 110px;
        height: 110px;
    }
    .product h3 {
        margin: 0;
        padding: 3px 5px 0 0;
        max-width: 96px;
        overflow: hidden;
        line-height: 1.1em;
        font-size: .9em;
        font-weight: normal;
        text-transform: uppercase;
        color: #999;
    }
    .product p {
        visibility: hidden;
    }
    .product:hover p {
        visibility: visible;
        position: absolute;
        width: 110px;
        height: 110px;
        top: 0;
        margin: 0;
        padding: 0;
        line-height: 110px;
        vertical-align: middle;
        text-align: center;
        color: #fff;
        background-color: rgba(0,0,0,0.75);
        transition: background .2s linear, color .2s linear;
        -moz-transition: background .2s linear, color .2s linear;
        -webkit-transition: background .2s linear, color .2s linear;
        -o-transition: background .2s linear, color .2s linear;
    }
    .k-listview:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
</style>
