{extends 'layout.tpl'}
{block name='title' prepend}{$page.title} - {/block}
{block name='body' append}
    <div class="container marketing">
      <div class="row featurette">
				<div class="col-md-8">
          <h2 class="featurette-heading">{$page.title|stripslashes}</h2>
          <p class="lead">{$page.content|stripslashes}</p>
        </div>
      </div>
      <hr class="featurette-divider"/>
{/block}
