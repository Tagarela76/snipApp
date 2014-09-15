function pdfReaderManager()
{
    var that = this;

    this.checkPDFReadingCapabilities = function()
    {
        this.browserName = that.getBrowserName();
        this.pdfPlugin = that.getPDFPlugin();
        if(!this.pdfPlugin){
            alert('Для чтения файла необходим Adobe Acrobat');
        };
    }

    this.getPDFPlugin = function() {
        return this.plugin = this.plugin || function() {
            if (that.getBrowserName() == 'ie') {
                //
                // load the activeX control
                // AcroPDF.PDF is used by version 7 and later
                // PDF.PdfCtrl is used by version 6 and earlier
                return that.getActiveXObject('AcroPDF.PDF') || that.getActiveXObject('PDF.PdfCtrl');
            }
            else {
                return that.getNavigatorPlugin('Adobe Acrobat') || that.getNavigatorPlugin('Chrome PDF Viewer') || that.getNavigatorPlugin('WebKit built-in PDF') || 
                        that.getNavigatorPlugin('AcroPDF.PDF') || that.getNavigatorPlugin('Adobe PDF');
            }
        }();
    };
  
    this.getActiveXObject = function(name) {
        try { return new ActiveXObject(name); } catch(e) {}
    };
    
    this.getNavigatorPlugin = function(name) {
        for (key in navigator.plugins) {
            var plugin = navigator.plugins[key];
            if (plugin.name == name)
                return plugin;
        }
    };
  
    this.readPdfFile = function(fileId)
    {
        that.checkPDFReadingCapabilities();
        this.fileUrl = $('#snipApiUrl').val()+'/index.php/api/readSnipFile?id='+fileId;
        
        this.html = '';
        this.html += '<object data="'+this.fileUrl+'" type="application/pdf" width="100%" height="567px">';
        this.html +=    '<a href="'+this.fileUrl+'">Для чтения файла необходим Adobe Acrobat(Сохранить)</a>';
        this.html += '</object>';
        
        $('#readPDF').html(this.html);
        $('#listView').html('');
    }

    this.getBrowserName = function() {
        return this.name = this.name || function() {
            var userAgent = navigator ? navigator.userAgent.toLowerCase() : "other";

            if (userAgent.indexOf("chrome") > -1)
                return "chrome";
            else if (userAgent.indexOf("safari") > -1)
                return "safari";
            else if (userAgent.indexOf("msie") > -1)
                return "ie";
            else if (userAgent.indexOf("firefox") > -1)
                return "firefox";
            return userAgent;
        }();
    };
}


function apiSnipManager()
{
    this.findFileByName = function()
    {
        this.fileName = $('#searchString').val();
        this.folderId = $('#selectedFolderId').val();
        if (this.fileName == '') {
            alert('Введите название документа');
        } else {
            $('#searchFileButton').hide();
            $('#snipFileLoadingContainer').show();
            $('#listView').hide();
            $('#readPDF').html('');
            $.ajax({
                url: 'wp-content/plugins/snipApp/ajax/findFile.php',
                dataType: "html",
                type: "post",
                data: {'fileName': this.fileName, folderId: this.folderId},
                success: function(html) {
                    $('#listView').html(html);
                    $('#searchFileButton').show();
                    $('#snipFileLoadingContainer').hide();
                    $('#listView').show();
                },
            });
        }
    }



    this.onSelect = function(e)
    {
        $('#readPDF').html('');
        $('#snipFileLoadingContainer').show();
        var dataSource;
        var treeview = $("#treeview").data("kendoTreeView");
        var dataItem = treeview.dataItem(e.node);
        $("#listView").kendoListView({
            dataSource: dataSource,
            selectable: "multiple",
            template: kendo.template($("#template").html())
        });
        //set selected folder Id
        $('#selectedFolderId').val(dataItem.id);
        $.ajax({
            url: 'wp-content/plugins/snipApp/ajax/getFilesByFolderId.php',
            dataType: "html",
            type: "post",
            data: {'folderId': dataItem.id},
            success: function(html) {
                $('#listView').html(html);
                $('#snipFileLoadingContainer').hide();
            },
        });
    }
}

function pageManager()
{
    this.snipApi = new apiSnipManager();
    this.pdfReaderManager = new pdfReaderManager();
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
        select: page.snipApi.onSelect,
    });
    $("#treeview").data("kendoTreeView").select(".k-item:first")
});

$(document).keypress(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		page.snipApi.findFileByName();	
	}
});