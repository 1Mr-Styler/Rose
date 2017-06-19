{if isset($wrong)}
    <b style="color: red">File doesn't exist man. Are you drunk?</b>
{/if}
<form method="post">
    <input name="dir" placeholder="File location" {if isset($loc)}value="{$loc}"{/if}>
</form>