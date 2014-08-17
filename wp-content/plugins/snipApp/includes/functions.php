<?php

function createSnipMenu()
{
    //Проверим существует ли функция add_options_page 
    if (function_exists('add_options_page')) {
        //Добавляем пункт меню в Параметры
        add_options_page('Снипы ', 'Снипы', 'manage_options', 'snipSettings', 'SnipPageOptions');
    }
}

function SnipPageOptions()
{
    global $snipGeneral;
    if(isset($_POST['submit'])){
                
        $options = array(
            'ext'=> $_POST['ext'],
            'snipAppUrl' => $_POST['snipAppUrl']
        );
        
        $snipGeneral->saveOptions($options);
        echo 'Изменения сохранены';
    };
    $options = $snipGeneral->getOptions();
    
    
?>
<h2>Настройка плагина Снипы</h2>
  <form name="snipSettings" method="post" 
            action="<?php echo $_SERVER['PHP_SELF']; ?>?page=snipSettings">
        <table>
            <tr>
                <td>
                    Адресс Сервера
                </td>
                <td>
                    <input type='text' value='<?=$options['snipAppUrl']?>' name='snipAppUrl' class='snipAppUrlContainer'>
                </td>
            </tr>
            <tr>
                <td>
                    Расширение документа
                </td>
                <td>
                    <select name='ext'>
                        <option value="rtf"
                                <?php if($options['ext'] == 'rtf'): ?>
                                    selected="selected"
                                <?php endif; ?>
                        >rtf</option>
                        <option value="pdf" 
                                <?php if($options['ext'] == 'pdf'):?>
                                selected="selected"
                                <?php endif; ?>>pdf</option>
                    </select>
                </td>
            </tr>
        </table>
      <input type="submit" value="Сохранить" name="submit">
  </form>
<?php

}
