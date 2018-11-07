<? $tabControl->BeginNextTab();
use Local\Catalog\Objects\Object;
use Local\Helpers\IblockHelper;
?>
<style>
    .news-selector label {
        cursor: pointer;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .news-selector .news-list {
        max-height: 150px;
        overflow-y: auto;
    }
</style>

<tr class="heading" id="tr_PREVIEW_TEXT_LABEL">
    <td colspan="2">Общие настройки сайта</td>
</tr>
<tr>
    <td colspan="2">
        <table border="0" cellspacing="0" cellpadding="0" class="internal" width="100%">
            <tbody>
            <tr class="heading">
                <td width="150">Опция</td>
                <td width="80">Активность</td>
            </tr>
            <tr>
                <td>Выводить вкладку "Новый год" на детальной странице</td>
                <td style="text-align: center">
                    <input type="checkbox" name="detail_newyear_show" value="Y" <?= ($detailNewYearShow == 'Y') ? 'checked' : '' ?> />
                </td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>