
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
    
    this.getFolderStructureById = function(i)
    {
        var html = '';
        html += '<ul>';
        html += '<li>';
        html += 'POSITION3';
        html += '</li>';
        html += '</ul>';
        $('#listCommon li:eq('+i+')').after(html);
           /**/
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
});