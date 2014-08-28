
function apiSnipManager()
{
    this.findFileByName = function()
    {
        this.fileName = $('#fileName').val();
        $('#searchFileButton').hide();
        $('#snipFileLoadingContainer').show();
        $.ajax({
            url: 'wp-content/plugins/snipApp/ajax/findFile.php',
            dataType: "html", 
            type: "post",
            data: {'fileName':this.fileName},
            success: function(html){
                $('#snipFileListContainer').html(html);
                $('#searchFileButton').show();
                $('#snipFileLoadingContainer').hide();
            },
        });
    }
}

function pageManager()
{
    this.snipApi = new apiSnipManager();
}

// global page object
var page;

$(function() {
   page = new pageManager();
   
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
});