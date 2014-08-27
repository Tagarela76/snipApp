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
                    <div id="listView"></div>
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
    
    homogeneous = new kendo.data.HierarchicalDataSource({
        transport: {
            read: {
                url: folderTreeUrl,
                //dataType: "jsonp"
                dataType: "jsonp"
            }
        },
        schema: {
            model: {
               children: "items"
            }
        }
    });
    $("#treeview").kendoTreeView({
        dataSource: homogeneous,
        dataTextField: "name",
        loadOnDemand: false,
        select: onSelect,
    });
    $("#treeview").data("kendoTreeView").select(".k-item:first")
</script>