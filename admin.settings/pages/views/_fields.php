<? $tabControl->BeginNextTab(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <td colspan="2">Настройки полей фильтра</td>
</tr>

    <? if (!empty($filterFields)): ?>
        <? foreach ($filterFields as $key => $filterField): ?>
            <tr class="field_item">
                <td>
                    <span>
                        Код поля в фильтре: <input type="text" name="filter_fields[]" value="<?= $filterField ?>">
                        Код свойства битрикс: <input type="text" name="bx_fields[]" value="<?= $bxFields[$key] ?>">
                    </span>
                </td>
            </tr>
        <? endforeach; ?>
    <? endif; ?>
<tr class="field_item">
    <td>
        <span>
            Код поля в фильтре: <input type="text" name="filter_fields[]" value="">
            Код свойства битрикс: <input type="text" name="bx_fields[]" value="">
        </span>
    </td>
</tr>
<tr>
    <td>
        <a href="#" class="add_field" onclick="return false">Добавить поле</a>
    </td>
</tr>

<script type="text/javascript">
    $('.add_field').on('click', function () {
        let lastTr = $('tr.field_item:last'),
            html = '';

        html += '<tr class="field_item"><td><span>';
        html += 'Код поля в фильтре: <input type="text" name="filter_fields[]" value=""> ';
        html += 'Код свойства битрикс: <input type="text" name="bx_fields[]" value="">';
        html += '</span></td></tr>';

        lastTr.after(html);
    });
</script>