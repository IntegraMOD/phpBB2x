				<h1>{L_FORUM_PRUNE}</h1>
				<p>{L_PRUNE_RESULT}</p>
				<table cellspacing="1">
					<thead>
					<tr>
						<th>{L_FORUM}</th>
						<th>{L_TOPICS_PRUNED}</th>
						<th>{L_POSTS_PRUNED}</th>
					</tr>
					</thead>
					<tbody>
					<!-- BEGIN prune_results -->
					<tr class="{prune_results.ROW_CLASS}">
						<td>{prune_results.FORUM_NAME}</td>
						<td>{prune_results.FORUM_TOPICS}</td>
						<td>{prune_results.FORUM_POSTS}</td>
					</tr>
					<!-- END prune_results -->
					</tbody>
				</table>