<?php

/**
 * Extension to modify SiteConfig
 * StartGeneratedWithDataObjectAnnotator
 * @property SiteConfig|mysiteSiteConfigExtension owner
 * EndGeneratedWithDataObjectAnnotator
 */
class mysiteSiteConfigExtension extends DataExtension {
	private static $db = [];
	private static $has_one = [];
	private static $belongs_to = [];
	private static $has_many = [];
	private static $many_many = [];
	private static $belongs_many_many = [];
	private static $many_many_extraFields = [];
	private static $searchable_fields = [];
	private static $summary_fields = [];
	private static $defaults = [];

	/**
	 * @param FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$fields->removeByName('Theme');
	}
}
