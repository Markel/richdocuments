<?php
/**
 * ownCloud - Documents App
 *
 * @author Victor Dubiniuk
 * @copyright 2013 Victor Dubiniuk victor.dubiniuk@gmail.com
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */

/**
 * Document routes
 */
$this->create('documents_genesis', 'ajax/genesis/{es_id}')
	->post()
	->action('\OCA\Documents\DocumentController', 'serve')
;
$this->create('documents_genesis', 'ajax/genesis/{es_id}')
	->get()
	->action('\OCA\Documents\DocumentController', 'serve')
;

$this->create('documents_documents_list', 'ajax/documents/list')
	->get()
	->action('\OCA\Documents\DocumentController', 'listAll')
;


/**
 * Session routes
 */
$this->create('documents_session_start', 'ajax/session/start')
	->get()
	->action('\OCA\Documents\SessionController', 'start')
;
$this->create('documents_session_start', 'ajax/session/start')
	->post()
	->action('\OCA\Documents\SessionController', 'start')
;

$this->create('documents_session_list', 'ajax/session/list')
	->get()
	->action('\OCA\Documents\SessionController', 'listAll')
;
$this->create('documents_session_list', 'ajax/session/list')
	->post()
	->action('\OCA\Documents\SessionController', 'listAll')
;

$this->create('documents_session_info', 'ajax/session/info')
	->post()
	->action('\OCA\Documents\SessionController', 'info')
;

$this->create('documents_session_listhtml', 'ajax/session/listHtml')
	->get()
	->action('\OCA\Documents\SessionController', 'listAllHtml')
;
$this->create('documents_session_listhtml', 'ajax/session/listHtml')
	->post()
	->action('\OCA\Documents\SessionController', 'listAllHtml')
;

$this->create('documents_session_join', 'ajax/session/join/{es_id}')
	->get()
	->action('\OCA\Documents\SessionController', 'join')
;
$this->create('documents_session_join', 'ajax/session/join/{es_id}')
	->post()
	->action('\OCA\Documents\SessionController', 'join')
;

$this->create('documents_session_save', 'ajax/session/save')
	->post()
	->action('\OCA\Documents\SessionController', 'save')
;

/**
 * User routes
 */
$this->create('documents_user_avatar', 'ajax/user/avatar')
	->get()
	->action('\OCA\Documents\UserController', 'sendAvatar')
;

$this->create('documents_user_invite', 'ajax/user/invite')
	->post()
	->action('\OCA\Documents\UserController', 'invite')
;

$this->create('documents_user_search', 'ajax/user/search')
	->get()
	->action('\OCA\Documents\UserController', 'search')
;
