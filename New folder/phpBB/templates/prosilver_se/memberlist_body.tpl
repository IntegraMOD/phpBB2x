

		<h2 class="solo">{L_MEMBERLIST}</h2>
		<ul class="linklist">
			<li class="rightside pagination">
				{PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span>
			</li>
		</ul>
		<div class="forumbg">
			<div class="inner"><span class="corners-top"><span></span></span>
			<table class="table1" cellspacing="1">
			<thead>
			<tr>
				<th class="name">{L_USERNAME}</th>
				<th class="posts">{L_POSTS}</th>
				<th class="active">{L_WEBSITE}</th>
				<th class="info">{L_FROM}</th>
				<th class="joined">{L_JOINED}</th>
			</tr>
			</thead>
			<tbody>
			<!-- BEGIN memberrow -->
			<tr class="{memberrow.ROW_CLASS}">
				<td><a href="{memberrow.U_VIEWPROFILE}">{memberrow.USERNAME}</a></td>
				<td class="posts">{memberrow.POSTS}</td>
				<td>{memberrow.WWW}</td>
				<td class="info">{memberrow.FROM}</td>
				<td>{memberrow.JOINED}</td>
			</tr>
			<!-- END memberrow -->
			</tbody>
			</table>
			<span class="corners-bottom"><span></span></span></div>
		</div>
		<form method="post" action="{S_MODE_ACTION}">
		<fieldset class="display-options">
			<label>{L_SELECT_SORT_METHOD}: {S_MODE_SELECT}&nbsp; {L_ORDER}: {S_ORDER_SELECT}&nbsp; <input type="submit" name="submit" value="{L_SUBMIT}" class="button2" /></label>
		</fieldset>
		</form>
		<hr />
		<ul class="linklist">
			<li class="rightside pagination">
				{PAGE_NUMBER}&nbsp; <span>{PAGINATION}</span>
			</li>
		</ul>
		{JUMPBOX}

