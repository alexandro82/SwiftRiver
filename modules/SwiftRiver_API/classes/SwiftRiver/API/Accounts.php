<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * SwiftRiver Rivers API
 *
 * PHP version 5
 * LICENSE: This source file is subject to the AGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/agpl.html
 * @author      Ushahidi Team <team@ushahidi.com>
 * @package     Swiftriver - http://github.com/ushahidi/Swiftriver_v2
 * @subpackage  Libraries
 * @copyright   Ushahidi - http://www.ushahidi.com
 * @license     http://www.gnu.org/licenses/agpl.html GNU Affero General Public License (AGPL)
 */
class SwiftRiver_API_Accounts extends SwiftRiver_API {
	
	/**
	* Get account object for the logged in account.
	*
	* @return Array
	*/
	public function get_logged_in_account()
	{
		return $this->get('/accounts/me');
	}
	
	/**
	* Get account object for the logged in account.
	*
	* @return Array
	*/
	public function get_account_by_name($account_path)
	{
		return $this->get('/accounts',  array('account_path' => $account_path));
	}
	
	/**
	* Get account object for the logged in account.
	*
	* @return Array
	*/
	public function get_account_by_email($email, $token)
	{
		$parameters = array('email' => $email);
		
		if ($token)
		{
			$parameters['token'] = 1;
		}
		
		return $this->get('/accounts',  $parameters);
	}
	
	/**
	* Search accounts
	*
	* @return Array
	*/
	public function search($query)
	{
		return $this->get('/accounts',  array('q' => $query));
	}
	
	/**
	* Create account
	*
	* @return Array
	*/
	public function create_account($fullname, $email, $username, $password)
	{
		$request_body = array(
			"name" => $fullname,
			"account_path" => $username,
			"email" => $email,
			"password" => $password
		);
		return $this->post('/accounts', $request_body);
	}
	
	/**
	 * Modify a river
	 *
	 * @param   string  $account_id
	 * @param   string  $parameters
	 * @return Array
	 */
	public function update_account($account_id, $parameters)
	{
		return $this->put('/accounts/'.$account_id, $parameters);
	}
}