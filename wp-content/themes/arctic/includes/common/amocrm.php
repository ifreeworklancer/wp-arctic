<?php

use AmoCRM\Contact;
use AmoCRM\Handler;
use AmoCRM\Lead;
use AmoCRM\Request;

require_once (__DIR__ . '/../../vendor/autoload.php');

try {
	$api = new Handler('arktikazp', 'dimplex.nic@gmail.com');

	$lead = new Lead();
	$lead
		->setName('Заявка с сайта')
		->setResponsibleUserId($api->config['ResponsibleUserId'])
		->setStatusId($api->config['LeadStatusId'])
		->setCustomField($api->config['BottlesFieldId'], $data['value'])
		->setCustomField($api->config['CommentFieldId'], $data['message'])
		->setCustomField($api->config['AddressFieldId'], $data['place'])
		->setTags([$data['user-name'], $data['phone']]);

	$api->request(new Request(Request::SET, $lead));

	$lead = $api->last_insert_id;

	$contact = new Contact();
	$contact
		->setName($data['user-name'])
		->setResponsibleUserId($api->config['ResponsibleUserId'])
		->setLinkedLeadsId($lead)
		->setCustomField($api->config['ContactFieldPhone'], phone_filter($data['phone']), 'MOB');

//	$api->request(new Request(Request::GET, ['query' => phone_filter($data['phone'])], ['contacts', 'list']));
//
//	$contact_exists = ($api->result) ? $api->result->contacts[0] : false;
//
//	if ($contact_exists) {
//		$contact
//			->setUpdate($contact_exists->id, $contact_exists->last_modified + 1)
//			->setResponsibleUserId($contact_exists->responsible_user_id)
//			->setLinkedLeadsId($contact_exists->linked_leads_id);
//	}
} catch (\Exception $e) {
}

