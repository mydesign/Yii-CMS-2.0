<h4>Разделы постов</h4>

<? if ($sections): ?>
    <?
    $this->widget('TbMenu', [
        'items'       => $sections,
        'encodeLabel' => false,
        'htmlOptions' => [
            'id' => 'sections-menu'
        ]
    ]);
    ?>
<? else: ?>
    <span class="italic-12">Разделы отсутствуют</span>
<? endif ?>

