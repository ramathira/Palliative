<?php  
namespace App\Main;  
use Illuminate\Support\Facades\Auth;  

class SideMenu {  
    /**  
     * List of side menu items.  
     */  
    public static function menu(): array {  
        $menu = [  
            //Dashboard
            [  
                'title' => "DASHBOARD",  
                'permission' => 'dashboard',  
                'type' => "main_menu",  
            ],  
            [  
                'type' => "sub_menu",  
                'icon' => "Sliders",  
                'route_name' => "dashboard",  
                'params' => [],  
                'title' => "Dashboard",  
                'permission' => 'dashboard',  
            ],  
        //USER MANAGEMENT
            [  
                'title' => "USER MANAGEMENT",  
                'permission' => 'user-management',
               'type' => "main_menu",    
            ],  
            [  
                'type' => "sub_menu", 
                'icon' => "UserSquare",  
                'route_name' => "users.index",  
                'params' => [],  
                'title' => "Users",  
                'permission' => 'user-list',  
            ],  
            [
                'type' => "sub_menu",   
                'icon' => "UserCheck",  
                'route_name' => "roles.index",  
                'params' => [],  
                'title' => "Roles",  
                'permission' => 'role-list',  
            ],  
            [  
                'type' => "sub_menu", 
                'icon' => "Check",  
                'route_name' => "permissions.index",  
                'params' => [],  
                'title' => "Permissions",  
                'permission' => 'permission-list',  
            ],  
         //PATIENT MANAGEMENT
            [  
                'title' => "PATIENT MANAGEMENT",  
                'permission' => 'patient-management',  
                'type' => "main_menu",  
            ],  
            [  
                'type' => "sub_menu", 
                'icon' => "Users", 
                'permission' => 'patient-mlsp',   
                'title' => "Register a Patient",  
                'sub_menu' => [  
                    [  
                        'icon' => "plus",  
                        'route_name' => "patient.create",  
                        'params' => [],  
                        'title' => "Add New",  
                        'permission' => 'patient-add', 
                        'type' => "sub_menu",  
                    ],  
                    [  
                        'icon' => "Newspaper",  
                        'route_name' => "patient.list",  
                        'params' => [],  
                        'title' => "List",  
                        'permission' => 'patient-list', 
                        'type' => "sub_menu",  
                    ],  
                    [  
                        'icon' => "Newspaper",  
                        'route_name' => "patient.pending_with_mlsp",  
                        'params' => [],  
                        'title' => "Pending",  
                        'permission' => 'patient-pending',  
                        'type' => "sub_menu", 
                    ],  
                ],  
            ],  
            [
                'icon' => "plus",
               'route_name' => "register_new_patient_jphn",
                'params' => [],
                'title' => "Register New Patient",
                'permission' => 'register-patient-jphn',  
                'type' => "sub_menu",           
            ],
           
            [
                'icon' => "List",
               'route_name' => "assesment_checklist.create",
                'params' => [],
                'title' => "Assesment Checklist",
                'permission' => 'assesment-checklist',     
                'type' => "sub_menu",       
            ],

             //Palliative Nurse
             [  
                'title' => "PALLIATIVE NURSE",  
                'permission' => 'palliative-nurse',  
                'type' => "main_menu",  
            ],
            [  
                'type' => "sub_menu", 
                'icon' => "Clipboard", 
                'permission' => 'pal-nurse-monthly-schedule',   
                'title' => "Monthly Schedule",  
                'sub_menu' => [  
                    [
                        'icon' => "PenTool",
                       'route_name' => "palliative_nurse.create_schedule",
                        'params' => [],
                        'title' => "Plan Entry",
                        'permission' => 'pal-nurse-monthly-schedule-entry',  
                        'type' => "sub_menu",           
                    ],
                    [
                        'icon' => "Calendar",
                       'route_name' => "palliative_nurse.view_schedule",
                        'params' => [],
                        'title' => "Calendar",
                        'permission' => 'pal-nurse-monthly-schedule-view',  
                        'type' => "sub_menu",           
                    ], 
                   
                ],  
            ],         
            
           

            //SUBCENTRE
            [  
                'title' => "SUBCENTRE",  
                'permission' => 'subcentre',  
                'type' => "main_menu",  
            ],

           
            
            [
              'icon' => "GaugeCircle",
             'route_name' => "subcentre.index",
              'params' => [],
              'title' => "Sub Centre",
              'permission' => 'subcentre-list',  
              'type' => "sub_menu",           
          ],
          [
              'icon' => "UserPlus",
             'route_name' => "jhi.index",
              'params' => [],
              'title' => "JHI",
              'permission' => 'subcentre-list',  
              'type' => "sub_menu",           
          ],
          [
              'icon' => "UserPlus",
             'route_name' => "jphn.index",
              'params' => [],
              'title' => "JPHN",
              'permission' => 'subcentre-list',
              'type' => "sub_menu",             
          ],


        //   "WARDS",
          [  
            'title' => "WARDS",  
            'permission' => 'wards',  
            'type' => "main_menu",  
        ],
            
          [
            'icon' => "Album",
           'route_name' => "wards.index",
            'params' => [],
            'title' => "Ward",
            'permission' => 'ward-list',  
            'type' => "sub_menu",         
        ],
        [
            'icon' => "BookMarked",
           'route_name' => "ward_members.members_list",
            'params' => [],
            'title' => "Ward Members",
            'permission' => 'ward-member-list',    
            'type' => "sub_menu",       
        ],
        [
            'icon' => "BookMarked",
           'route_name' => "mlsp.index",
            'params' => [],
            'title' => "MLSP",
            'permission' => 'mlsp-list',  
            'type' => "sub_menu",         
        ],

        // "ASHA WORKER",

        [  
            'title' => "ASHA WORKER",  
            'permission' => 'asha-worker',  
            'type' => "main_menu",  
        ],
            
        [
          'icon' => "Album",
         'route_name' => "asha_worker.index",
          'params' => [],
          'title' => "Asha Worker",
          'permission' => 'asha-worker-list',  
          'type' => "sub_menu",          
      ],



    //   "ANGANWADI",
            
    [  
        'title' => "ANGANWADI",  
        'permission' => 'anganwadi',  
        'type' => "main_menu",  
    ],
      [
        'icon' => "Album",
       'route_name' => "anganwadi.index",
        'params' => [],
        'title' => "Anganwadi",
        'permission' => 'anganwadi-list',
        'type' => "sub_menu",             
    ],
    [
        'icon' => "Album",
       'route_name' => "anganwadi.awc_worker_list",
        'params' => [],
        'title' => "Anganwadi Workers",
        'permission' => 'anganwadi-list',  
        'type' => "sub_menu",           
    ],
    //TREATMENT
    [  
        'title' => "TREATMENT",  
        'permission' => 'treatment',  
        'type' => "main_menu",  
    ],
            
      [
        'icon' => "Album",
       'route_name' => "diagnosis.index",
        'params' => [],
        'title' => "Diagnosis",
        'permission' => 'diagnosis-list',  
        'type' => "sub_menu",                
    ],

    [
        'icon' => "Album",
       'route_name' => "treatment_types.index",
        'params' => [],
        'title' => "Treatment Types",
        'permission' => 'treatment-list',    
        'type' => "sub_menu",              
    ],
    [
        'icon' => "Album",
       'route_name' => "medicines.index",
        'params' => [],
        'title' => "Medicine",
        'permission' => 'medicine-list',   
        'type' => "sub_menu",               
    ],  
           
        ];  

        return self::filterMenuByPermission($menu);  
    }  

    private static function filterMenuByPermission(array $menu): array {
        $user = Auth::user();
        if (!$user) return [];
    
        $filteredMenu = [];
    
        foreach ($menu as $item) {
            if (isset($item['permission'])) {
                // Check if the user has permission for the menu item
                if ($user->hasPermissionTo($item['permission'])) {
                    // Check for submenus
                    if (isset($item['sub_menu'])) {
                        // Filter submenus based on user permissions
                        $item['sub_menu'] = array_filter($item['sub_menu'], function ($subItem) use ($user) {
                            return $user->hasPermissionTo($subItem['permission']);
                        });
    
                        // If any submenu items remain, keep the parent
                        if (!empty($item['sub_menu'])) {
                            $filteredMenu[] = $item;
                        }
                    } else {
                        // No submenus, add item directly
                        $filteredMenu[] = $item;
                    }
                }
            } else {
                // If there's no permission required, include the item
                $filteredMenu[] = $item;
            }
        }
    
        return $filteredMenu;
    }
    
}  
