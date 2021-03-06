<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller 
{   
    public $helpers = array('I18n.I18n');
    public $theme = "Cakestrap";
    
    public $components = array(
        'Flash', 'DebugKit.Toolbar', 'Auth' => array(
            'loginRedirect' => array('controller' => 'characters', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'characters', 'action' => 'index'),
            'unauthorizedRedirect' => array('controller' => 'characters', 'action' => 'index'),
            'authenticate' => array('Form' => array('passwordHasher' => 'Blowfish'))));
    
    public function beforeFilter()
    {
        if(isset($user) && $user['id'] != null && $user['active'] == 0){
            $this->Session->setFlash(__('Ce compte n\'a pas encore été activer.'), 'flash/error');
        }
        
        $this->Auth->allow('index', 'view');
    }
    
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'Admin') 
        {
            return true;
        }

        // Default deny
        $this->Session->setFlash(__('This action is not authorized.'), 'flash/error');
        return false;
    }
}   