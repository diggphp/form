<div class="mt-2">
    <label for="{$id}_field" class="form-label">{$label}</label>
    <select name="{$name}" class="form-select" id="{$id}_field" <?php if (isset($required) && $required) { ?>required<?php } ?> <?php if (isset($disabled) && $disabled) { ?>disabled<?php } ?>>
        {foreach $items??[] as $_group=>$_vo}
        {if isset($_vo['value'])}
        {if in_array($_vo['value'], (array)$value)}
        <option value="{$_vo['value']}" selected>{$_vo['label']??$_vo['value']}</option>
        {else}
        <option value="{$_vo['value']}">{$_vo['label']??$_vo['value']}</option>
        {/if}
        {else}
        <optgroup label="{$_group}">
            {foreach $_vo as $_subvo}
            {if in_array($_subvo['value'], (array)$value)}
            <option value="{$_subvo['value']}" selected>{$_subvo['label']??$_subvo['value']}</option>
            {else}
            <option value="{$_subvo['value']}">{$_subvo['label']??$_subvo['value']}</option>
            {/if}
            {/foreach}
        </optgroup>
        {/if}
        {/foreach}
    </select>
    {if isset($help) && $help}
    <div class="form-text text-muted" style="font-size: .8em;">{echo $help}</div>
    {/if}
</div>