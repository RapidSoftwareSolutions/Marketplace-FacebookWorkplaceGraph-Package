[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/FacebookWorkplaceGraph/functions?utm_source=RapidAPIGitHub_FacebookWorkplaceGraphFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# FacebookWorkplaceGraph Package
Workplace provides an Account Management API for managing user accounts and a Graph API for managing groups membership, and content that exists within your instance.
* Domain: [work.facebook.com](https://rapidapi.facebook.com/)
* Credentials: accessToken

## How to get credentials: 
1. In the Company Dashboard, open the Integrations tab.
2. Click on the Create App button.
3. Choose a relevant name and description for the app.
4. Choose the required permissions for the app, based on the integration functionality you require.
5. Copy and safely store the access token that's shown to you.
 
## FacebookWorkplaceGraph.getSingleCommunity
Get main information about community. Community object as a root Group for the other groups in a Workplace community.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| communityId| String     | Community id

## FacebookWorkplaceGraph.getCommunityGroups
Get a list of all groups for a community.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| communityId| String     | Community id

## FacebookWorkplaceGraph.getCommunityMembers
Get a list of all members for a community.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| communityId| String     | Community id

## FacebookWorkplaceGraph.addGroupToCommunity
Add a new group to a community.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| communityId| String     | Community id
| name       | String     | The name of the group to be created.
| description| String     | Group description
| privacy    | String     | The privacy setting of the group. Possible values: ```OPEN```, ```CLOSED```, ```SECRET```. Default ```CLOSED```

## FacebookWorkplaceGraph.getSingleGroup
Get main information about group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id

## FacebookWorkplaceGraph.getGroupMembers
Get group members.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id

## FacebookWorkplaceGraph.getGroupDocs
Get group docs.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id

## FacebookWorkplaceGraph.getGroupPosts
Get group posts.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id

## FacebookWorkplaceGraph.addMemberToGroup
Add a member to a group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| email      | String     | User email

## FacebookWorkplaceGraph.deleteMemberFromGroup
Remove a member from a group. Removing the last member from a group will schedule that group for deletion.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| email      | String     | User email

## FacebookWorkplaceGraph.setMemberAsGroupAdmin
Promote a member to admin of a group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| userId     | String     | User id

## FacebookWorkplaceGraph.unsetGroupAdmin
Demote an admin to member of a group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| userId     | String     | User id

## FacebookWorkplaceGraph.createGroupEvent
Create a new Event in a group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| name       | String     | Event name
| startTime | DatePicker     | Event start time. Date format: ```YYYY-MM-DDTHH:mm:SS```
| endTime   | DatePicker     | Event end time. Date format: ```YYYY-MM-DDTHH:mm:SS```
| description| String     | Event description
| location   | String     | Event location

## FacebookWorkplaceGraph.getPostComments
Get the comments from a post.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| postId     | String     | Post id

## FacebookWorkplaceGraph.getSinglePost
Get post main content.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| postId     | String     | Post id

## FacebookWorkplaceGraph.createGroupPost
Post into a group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| message    | String     | Message text
| link       | String     | Post link

## FacebookWorkplaceGraph.tagUserInGroupPost
Tag a user in a group post.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| groupId    | String     | Group id
| message    | String     | Tagged text. Example: ```Hi+@[100013325822531]```

## FacebookWorkplaceGraph.getSingleMember
Get main information about member.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| memberId   | String     | Member id

## FacebookWorkplaceGraph.getMemberConversations
Get conversations for a member including messages and attachments.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| memberId   | String     | Member id

## FacebookWorkplaceGraph.deleteMemberInboxMessage
Delete a specific message in a member's inbox (requires a member's impersonate token).

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| memberId   | String     | Member id
| messageId  | String     | Message id

## FacebookWorkplaceGraph.getMemberEvents
Get a member's events.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The api key obtained from Facebook Workplace
| memberId   | String     | Member id

