<?php

namespace App\Main;
use Illuminate\Support\Facades\Auth;

class SideMenu
{
    /**
     * List of side menu items.
     */
    public static function menu(): array
    {
        $menu = [

            "USER MANAGEMENT",
            [
                'icon' => "UserSquare",
                'route_name' => "users.index",
                'params' => [],
                'title' => "Users",
                'permission' => 'user-list',
            ],
            [
                'icon' => "UserCheck",
                'route_name' => "roles.index",
                'params' => [],
                'title' => "Roles",
                'permission' => 'role-list',
                
            ],
            [
                'icon' => "Check",
                'route_name' => "permissions.index",
                'params' => [],
                'title' => "Permissions",
                'permission' => 'permission-list',
            ],           
               
          "PATIENT MANAGEMENT",
            
          [
            'icon' => "Users",
            'title' => "Register a Patient",
            'sub_menu' => [
                [
                    'icon' => "plus",
                    'route_name' => "patient.create",
                    'params' => [],
                    'title' => "Add New",
                    'permission' => 'patient-add',
                ],
                [
                    'icon' => "Newspaper",
                    'route_name' => "patient.list",
                    'params' => [],
                    'title' => "List",
                ],
                [
                    'icon' => "PanelBottom",
                    'route_name' => "notification",
                    'params' => [],
                    'title' => "TTTT",
                ],
            ],
        ],

        "SUBCENTRE",
            
          [
            'icon' => "GaugeCircle",
           'route_name' => "subcentre.index",
            'params' => [],
            'title' => "Sub Centre",
            'permission' => 'subcentre-list',           
        ],
         "WARDS",
            
          [
            'icon' => "Album",
           'route_name' => "wards.index",
            'params' => [],
            'title' => "Ward",
            'permission' => 'ward-list',           
        ],
        [
            'icon' => "BookMarked",
           'route_name' => "ward_members.members_list",
            'params' => [],
            'title' => "Ward Members",
            'permission' => 'ward-member-list',           
        ],
        [
            'icon' => "BookMarked",
           'route_name' => "mlsp.index",
            'params' => [],
            'title' => "MLSP",
            'permission' => 'mlsp-list',           
        ],
           
        "ASHA WORKER",
            
        [
          'icon' => "Album",
         'route_name' => "asha_worker.index",
          'params' => [],
          'title' => "Asha Worker",
          'permission' => 'asha-worker-list',           
      ],

      "ANGANWADI",
            
      [
        'icon' => "Album",
       'route_name' => "anganwadi.index",
        'params' => [],
        'title' => "Anganwadi",
        'permission' => 'anganwadi-list',           
    ],
    [
        'icon' => "Album",
       'route_name' => "anganwadi.awc_worker_list",
        'params' => [],
        'title' => "Anganwadi Workers",
        'permission' => 'anganwadi-list',           
    ],

    "DIAGNOSIS",
            
      [
        'icon' => "Album",
       'route_name' => "diagnosis.index",
        'params' => [],
        'title' => "Diagnosis",
        'permission' => 'diagnosis-list',           
    ],
          
        ];


        return self::filterMenuByPermission($menu);
    }

    private static function filterMenuByPermission(array $menu): array
{
    return array_filter($menu, function ($item) {
        // Check if user is authenticated
        $user = Auth::user();

        // If the item has a permission and user is authenticated, check permission
        if (is_array($item) && isset($item['permission'])) {
            if ($user && $user->hasPermissionTo($item['permission'])) {
                return true;  // Include menu item if user has permission
            }
            return false;  // Exclude menu item if no permission or user not authenticated
        }

        // If there's no permission required, include the item
        return true;
    });
}

}
