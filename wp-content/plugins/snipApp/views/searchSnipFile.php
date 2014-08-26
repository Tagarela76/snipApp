<!--<div style="display: block; height: 1000px;">
    <div id='folderListContainer' style="width: 70%; float: left;">
        <ul id="listView">
            <?php $i = 0;?>
            <?php foreach ($folderList as $folder): ?>
                <li>
                    <span onclick="page.snipApi.getFolderStructureById(<?php echo $i;?>);">
                        <?php echo $folder['name']; ?>
                    </span>
                </li>
            <?php $i++;?>
            <?php endforeach; ?>
        </ul>
    </div>
    <div style="pane-content">
        <div>
            <input type = "text" id="fileName" value=""/>
            <input type="button" value="FIND FILES" id='searchFileButton' onclick='page.snipApi.findFileByName();'/> 
        </div>
        <div id='snipFileLoadingContainer' style="display: none;">
            <img src="wp-content/plugins/snipApp/includes/images/loading.gif"/>
        </div>
        <div id='snipFileListContainer'>

        </div>
    </div>
</div>-->
<div class="k-block">
    
    <div id="horizontal"  style="height: 567px;">
        <div>
            <div class="pane-content">
                <div id="treeview" class="demo-section"></div>
            </div>
        </div>
        <div>
            <div class="pane-content content2">
                    <div id="listView"></div>
                    <!--<div id="pager" class="k-pager-wrap"></div>-->
            </div>
        </div>
    </div>
</div>
<script type="text/x-kendo-template" id="template">
    <div class="product">
        <img src="" alt="#: name # image" />
        <h3>#:name#</h3>
    </div>
</script>
<script>
    var serviceRoot = "";
    function onSelect(e) {
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
                console.log(html);
            },
        });
        

    }
    
    homogeneous = new kendo.data.HierarchicalDataSource({
        transport: {
            read: {
                url: "http://localhost/gosti/index.php/apiSnip/getFolderTreeArray?folderId=507",
                dataType: "json"
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