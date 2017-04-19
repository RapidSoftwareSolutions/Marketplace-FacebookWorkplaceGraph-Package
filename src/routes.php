<?php
$routes = [
    'metadata',
    'getSingleCommunity',
    'getCommunityGroups',
    'getCommunityMembers',
    'addGroupToCommunity',
    'getSingleGroup',
    'getGroupMembers',
    'getGroupDocs',
    'getGroupPosts',
    'addMemberToGroup',
    'deleteMemberFromGroup',
    'setMemberAsGroupAdmin',
    'unsetGroupAdmin',
    'createGroupEvent',
    'getPostComments',
    'getSinglePost',
    'createGroupPost',
    'tagUserInGroupPost',
    'getSingleMember',
    'getMemberConversations',
    'deleteMemberInboxMessage',
    'getMemberEvents'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

