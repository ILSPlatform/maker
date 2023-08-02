{#
    Available variables:
    * entity       - entity <?= $entity_class_name ?> or null
    * indexer_item - indexer item Oro\Bundle\SearchBundle\Query\Result\Item
#}
{% extends '@OroSearch/Search/searchResultItem.html.twig' %}

{% set showImage = false %}

{% set recordUrl = indexer_item.recordUrl %}
{% set title = indexer_item.selectedData.name %}

{% set entityType = '<?= $entity_label ?>'|trans %}

{% set entityInfo = [
    {'title': 'oro.ui.created_at'|trans, 'value': entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A'|trans},
    {'title': 'oro.ui.updated_at'|trans, 'value': entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A'|trans},
] %}
