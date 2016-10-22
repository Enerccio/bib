<div class="row">
  <div class="col-md-8" id="displayAll">
  {foreach from=$bibentries item=entry}
    <div class="panel panel-default clickableDiv" onclick="window.addToBasket({$entry->get_id()}, {$bibcpage})">
      <div class="panel-body">
        <div>
          {include file='bibentry.tpl' entry=$entry}
        </div>
        <div class="lastEntry">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </div>
      </div>
    </div>
  {/foreach}
  </div>
  <div class="col-md-4" id="displayBasket">
    <button type="button" class="btn btn-primary" id="getBibTex" onclick="window.showBibTex()">Get BibTex version</button>
    <br/>
    <div class="basketContainer">
      {foreach from=$basket item=entry}
        <div class="panel panel-default">
          <div class="panel-body basket">
            {include file='bibentry.tpl' entry=$entry}
          </div>
          <div class="lastEntry">
            <a href="#" onclick="window.delFromBasket({$entry->get_id()}, {$bibcpage})">
              <span class="glyphicon glyphicon-remove"></span>
            </a>
          </div>
        </div>
      {/foreach}
    </div>
  </div>
</div>

{if $bibmaxpage gt 0}
  {math assign="pagefrom" equation='max(x-1, 0)+1' x=$bibcpage}
  {math assign="pageto" equation='min(x, y+5)' x=$bibmaxpage y=$bibcpage}
  <nav aria-label="Page navigation">
    <ul class="pagination">
      {if $bibcpage neq 0}
      <li>
        <a  href="#" onclick="window.refreshPage({math equation='x-1' x=$bibcpage})" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      {else}
      <li class="disabled">
        <a  href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      {/if}
      {for $page=$pagefrom to $pageto}
        <li {if {math equation='x+1' x=$bibcpage} eq $page}class="active"{/if}>
          <a href="#" onclick="window.refreshPage({math equation='x-1' x=$page})">{$page}</a>
        </li>
      {/for}
      {if $bibcpage lt {math equation='x-1' x=$bibmaxpage}}
      <li>
        <a href="#" onclick="window.refreshPage({math equation='x+1' x=$bibcpage})" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      {else}
        <li class="disabled">
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      {/if}
    </ul>
  </nav>
{/if}
