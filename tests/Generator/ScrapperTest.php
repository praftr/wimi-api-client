<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Tests\Generator;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Praftr\WimiApiClient\Generator\Scraper;

class ScrapperTest extends TestCase
{
    public function testScrap(): void
    {
        $expectedResponseContent = <<<HTML
<div id="wapi-module-auth">
    <div id="wapi-entity-auth-user">
        <hr>
        <h2><a id="auth_user_Login">auth.user.Login</a></h2>
        <pre>Used to login a user and retrieve an access token</pre>
        <pre>The account must be valid and the user must be activated</pre>
        <h4>Url:</h4> https://api.wimi.pro <h4>Call type:</h4> The json message is sent in the http request body. <h4>
        Restrictions:</h4> Role restrictions:<br>
        <table>
            <tbody>
            <tr>
                <td>Guests (-5)</td>
                <td>Contributors (0)</td>
                <td>Managers (1)</td>
                <td>Administrators (2)</td>
                <td>Account manager (3)</td>
            </tr>
            <tr>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
            </tr>
            </tbody>
        </table>
        <br> <h4>Header Identification:</h4>
        <ul>
            <li> account_name - string Optional: ""</li>
        </ul>
        <h4>Body Data:</h4>
        <ul>
            <li> list_projects - bool Optional: false</li>
            <li> projects_auth - bool Optional: true</li>
            <li> projects_stats - bool Optional: false</li>
            <li> projects_tasks_stats - bool Optional: false</li>
            <li> projects_users - bool Optional: false</li>
            <li> manual - bool Optional: false</li>
            <li> token - string Optional: ""</li>
            <li> fetch_pwd_sha - bool Optional: false</li>
        </ul>
        <h4>Output:</h4>
        <ul>
            <li> user - <a href="#User">User</a></li>
            <li> account - <a href="#Account">Account</a></li>
            <li> projects - LIST of <a href="#Project">Project</a> - can be null</li>
            <li> need_update - bool</li>
            <li> need_double_authentification - bool - can be null</li>
        </ul>
        <h4>Example:</h4>
        <pre>{ "header": { "target": "auth.user.Login", "api_version": "1.2", "app_token": "You can generate one from your account settings", "msg_key": "message key also returned in the response", "token": "user session token returned by auth.user.Login", "identification": {} }, "body": { "data": { "list_projects": true, "projects_auth": true, "projects_stats": true, "projects_tasks_stats": true, "projects_users": true, "manual": true, "token": "some text", "fetch_pwd_sha": true } } }</pre>
        <hr>
        <h2><a id="auth_user_Logout">auth.user.Logout</a></h2>
        <pre>Used to logout a user</pre>
        <pre>keep_self removes all sessions of the user except this one kill_all removes all the sessions of the user, including this one both set to false only remove this session both set to true throws a 400</pre>
        <h4>Url:</h4> https://api.wimi.pro <h4>Call type:</h4> The json message is sent in the http request body. <h4>
        Restrictions:</h4> Role restrictions:<br>
        <table>
            <tbody>
            <tr>
                <td>Guests (-5)</td>
                <td>Contributors (0)</td>
                <td>Managers (1)</td>
                <td>Administrators (2)</td>
                <td>Account manager (3)</td>
            </tr>
            <tr>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
            </tr>
            </tbody>
        </table>
        <br> <h4>Header Identification:</h4>
        <ul>
            <li> account_id - int</li>
            <li> user_id - int</li>
        </ul>
        <h4>Body Data:</h4>
        <ul>
            <li> keep_self - bool Optional: false</li>
            <li> kill_all - bool Optional: false</li>
        </ul>
        <h4>Output:</h4>
        <ul>
            <li> success - bool</li>
        </ul>
        <h4>Example:</h4>
        <pre>{ "header": { "target": "auth.user.Logout", "api_version": "1.2", "app_token": "You can generate one from your account settings", "msg_key": "message key also returned in the response", "token": "user session token returned by auth.user.Login", "identification": { "account_id": 12345, "user_id": 12345 } }, "body": { "data": { "keep_self": true, "kill_all": true } } }</pre>
    </div>
</div>
HTML;
        $expectedResponse = new Response(200, [], $expectedResponseContent);
        $expectedActions = [
            [
                'target' => 'auth.user.Login',
                'identification' => [
                    'account_name - string Optional: ""',
                ],
                'data' => [
                    'list_projects - bool Optional: false',
                    'projects_auth - bool Optional: true',
                    'projects_stats - bool Optional: false',
                    'projects_tasks_stats - bool Optional: false',
                    'projects_users - bool Optional: false',
                    'manual - bool Optional: false',
                    'token - string Optional: ""',
                    'fetch_pwd_sha - bool Optional: false',
                ],
                'output' => [
                    'user - User',
                    'account - Account',
                    'projects - LIST of Project - can be null',
                    'need_update - bool',
                    'need_double_authentification - bool - can be null',
                ],
            ],
            [
                'target' => 'auth.user.Logout',
                'identification' => [
                    'account_id - int',
                    'user_id - int',
                ],
                'data' => [
                    'keep_self - bool Optional: false',
                    'kill_all - bool Optional: false',
                ],
                'output' => [
                    'success - bool',
                ],
            ],
        ];


        $httpClientMock = $this->createMock(ClientInterface::class);
        $httpClientMock->method('request')->willReturn($expectedResponse);

        $actions = Scraper::scrap($httpClientMock);

        $this->assertSame($expectedActions, $actions);
    }
}
