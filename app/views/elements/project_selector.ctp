<!--  <% user_projects_by_root = User.current.projects.find(:all, :include => :parent).group_by(&:root) %> -->
<select onchange="if (this.value != '') { window.location = this.value; }">
<option selected="selected"><?php __('Jump to a project...') ?></option>
<option disabled="disabled">---</option>
<!-- 
<% user_projects_by_root.keys.sort.each do |root| %>
    <%= content_tag('option', h(root.name), :value => url_for(:controller => 'projects', :action => 'show', :id => root, :jump => current_menu_item)) %>
    <% user_projects_by_root[root].sort.each do |project| %>
        <% next if project == root %>
        <%= content_tag('option', ('&#187; ' + h(project.name)), :value => url_for(:controller => 'projects', :action => 'show', :id => project, :jump => current_menu_item)) %>
    <% end %>
<% end %>
--><?php pr($currentuser); ?>
<?php foreach ($currentuser['memberships'] as $member): ?>
<?php $project = $member['Project'][0]['Project'] ?>
<?php echo $html->tag('option',$project['name'],aa('value',$html->url('/projects/show/'.$project['identifier']))) ?>
<?php endforeach; ?>
</select>

