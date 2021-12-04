<x-utils.view-button
:href="route('admin.class.show', ['class' => $row->class_id])"

/>
<x-utils.edit-button :href="route('admin.class.edit', ['class' => $row->class_id])" />
<x-utils.delete-button :href="route('admin.class.destroy', $row)" />
