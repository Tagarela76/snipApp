<div id='folderListContainer'>
    <?php foreach($folderList as $folder): ?>
        <?php echo $folder['name']; ?><br>
    <?php endforeach; ?>
</div>
<div>
    <input type = "text" id="fileName" value=""/>
    <input type="button" value="FIND FILES" id='searchFileButton' onclick='page.snipApi.findFileByName();'/> 
</div>
<div id='snipFileLoadingContainer' style="display: none;">
    <img src="wp-content/plugins/snipApp/includes/images/loading.gif"/>
</div>
<div id='snipFileListContainer'>
    
</div>