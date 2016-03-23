<?php
/**
 * Created by PhpStorm.
 * User: heath
 * Date: 23/03/16
 * Time: 2:20 PM
 */

class HtmlDocumentPage extends Page {

    private static $db = array(
        'DocumentTitle' => 'Text',
        'DocumentAuthor' => 'Varchar(255)'
    );

    private static $has_one = array();

    private static $has_many = array();

    /**
     * We don't want anyone to try and add anything other than document sections to the report
     */
    private static $allowed_children = array("DocumentSection");

    /**
     * Add DataBase fields to the CMS
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        // Document Title Section
        $fields->addFieldToTab('Root.Main', new TextField('DocumentTitle', 'Title of the Document'), 'Content');
        // Document Author Section
        $fields->addFieldToTab('Root.Main', new TextField('DocumentTitle', 'Title of the Document'), 'Content');

        // Return the fields
        return $fields;
    }

}

class HtmlDocumentPage_Controller extends Page_Controller {

}