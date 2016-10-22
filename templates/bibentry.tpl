{if $entry|is_a:'bib_journal'}
  {$entry->get_authors()}: <br>
  {$entry->get_name()} <br>
  <b>{$entry->get_journal_name()}</b> <br>
  {include file='optional.tpl' data=$entry->get_number() prefix='(' postfix=')'}({$entry->get_volume()})({include file='optional.tpl' data=$entry->get_month() prefix='' postfix='-'}{$entry->get_year()}){include file='optional.tpl' data=$entry->get_pages() prefix=', ' postfix=''}.<br>
  {include file='optional.tpl' data=$entry->get_note() prefix='[' postfix=']<br>'}
{/if}
{if $entry|is_a:'bib_book'}
  {$entry->get_authors()}: <br>
  <b>{$entry->get_name()}</b> {include file='optional.tpl' data=$entry->get_volume() prefix='(' postfix=')'}<br>
  {$entry->get_publisher()}, {include file='optional.tpl' data=$entry->get_month() prefix='' postfix='-'}{$entry->get_year()} <br>
  {include file='optional.tpl' data=$entry->get_edition() prefix='' postfix='<br>'}
  {include file='optional.tpl' data=$entry->get_series() prefix='' postfix='<br>'}
  {include file='optional.tpl' data=$entry->get_address() prefix='' postfix='<br>'}
  {include file='optional.tpl' data=$entry->get_note() prefix='[' postfix=']<br>'}
{/if}
