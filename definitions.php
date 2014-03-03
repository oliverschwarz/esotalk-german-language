<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["German"] = array(
	"locale" => "de-DE",
	"name" => "German",
	"description" => "Deutsches Sprachpaket.",
	"version" => ESOTALK_VERSION,
	"author" => "Oliver Schwarz",
	"authorEmail" => "oliver.schwarz@gmail.com",
	"authorURL" => "http://github.com/oliverschwarz",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "gestern";
$definitions["%d days ago"] = "vor %d Tagen";
$definitions["%d hour ago"] = "vor 1 Stunde";
$definitions["%d hours ago"] = "vor %d Stunden";
$definitions["%d minute ago"] = "vor 1 Minute";
$definitions["%d minutes ago"] = "vor %d Minuten";
$definitions["%d month ago"] = "vor 1 Monat";
$definitions["%d months ago"] = "vor %d Monaten";
$definitions["%d second ago"] = "vor 1 Sekunde";
$definitions["%d seconds ago"] = "vor %d Sekunden";
$definitions["%d week ago"] = "letzte Woche";
$definitions["%d weeks ago"] = "vor %d Wochen";
$definitions["%d year ago"] = "letztes Jahr";
$definitions["%d years ago"] = "vor %d Jahren";

$definitions["%s and %s"] = "%s und %s";
$definitions["%s can view this conversation."] = "%s k&ouml;nnen die Unterhaltung sehen.";
$definitions["%s changed %s's group to %s."] = "%s &auml;nderte %s's Gruppe zu %s.";
$definitions["%s changed your group to %s."] = "%s &auml;nderte Deine Gruppe zo %s.";
$definitions["%s conversation"] = "%s Unterhaltung";
$definitions["%s conversations"] = "%s Unterhaltungen";
$definitions["%s invited you to %s."] = "%s l&auml;dt Dich zu %s ein.";
$definitions["%s joined the forum."] = "%s ist dem Forum beigetreten.";
$definitions["%s post"] = "%s Beitrag";
$definitions["%s posted %s"] = "%s schrieb %s";
$definitions["%s posted in %s."] = "%s schrieb in %s.";
$definitions["%s posts"] = "%s Beitr&auml;ge";
$definitions["%s reply"] = "%s Antwort";
$definitions["%s replies"] = "%s Antworten";
$definitions["%s Settings"] = "%s Einstellungen";
$definitions["%s started the conversation %s."] = "%s beginnt die Unterhaltung %s.";
$definitions["%s tagged you in a post."] = "%s erw&auml;hnte Dich in einem Beitrag.";
$definitions["%s will be able to view this conversation."] = "%s wird diese Unterhaltung sehen k&ouml;nnen.";
$definitions["%s will be able to:"] = "%s wird folgendes k&ouml;nnen:";

$definitions["Success!"] = "Erfolg!";
$definitions["A new version of esoTalk (%s) is available."] = "Eine neue esoTalk-Version (%s) ist verf&uuml;gbar.";
$definitions["a private conversation"] = "eine private Unterhaltung";
$definitions["Access the administrator control panel."] = "Access the administrator control panel.";
$definitions["Account type"] = "Account type";
$definitions["Activate"] = "Activate";
$definitions["Activity"] = "Activity";
$definitions["Add"] = "Add";
$definitions["Administration"] = "Administration";
$definitions["Administrator email"] = "E-Mail des Admins";
$definitions["Administrator password"] = "Passwort des Admins";
$definitions["Administrator username"] = "Benutzername des Admins";
$definitions["Advanced options"] = "Erweiterte Einstellungen";
$definitions["All Channels"] = "Alle Kan&auml;le";
$definitions["Allow members to edit their own posts:"] = "Mitglieder k&ouml;nnen ihre eigenen Beitr&auml;ge bearbeiten:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Hast Du schon Zugang? <a href='%s' class='link-login'>Melde Dich an!</a>";
$definitions["Appearance"] = "Design";
$definitions["Automatically star conversations that I reply to"] = "Automatisch Unterhaltungen verfolgen, in denen ich etwas geschrieben habe";
$definitions["Avatar"] = "Avatar";

$definitions["Back to channels"] = "Zur&uuml;ck zu den Kan&auml;len";
$definitions["Back to conversation"] = "Zur&uuml;ck zur Unterhaltung";
$definitions["Back to member"] = "Zur&uuml;ck zum Benutzer";
$definitions["Back to members"] = "Zur&uuml;ck zu den Benutzern";
$definitions["Back to search"] = "Zur&uuml;ck zur Suche";
$definitions["Background color"] = "Hintergrund-Farbe";
$definitions["Background image"] = "Hintergrund-Bild";
$definitions["Base URL"] = "Basis-URL";
$definitions["Bold"] = "Fett";
$definitions["By %s"] = "Von %s";

$definitions["Can suspend/unsuspend members"] = "Can suspend/unsuspend members";
$definitions["Cancel"] = "Abbrechen";
$definitions["Change %s's Permissions"] = "&Auml;ndere %ss Berechtigungen";
$definitions["Change avatar"] = "&Auml;ndere den Avatar";
$definitions["Change Channel"] = "&Auml;ndere den Kanal";
$definitions["Change channel"] = "&Auml;ndere den Kanal";
$definitions["Change username"] = "&Auml;ndere den Benutzernamen";
$definitions["Change Password or Email"] = "Passwort oder E-Mail &auml;ndern";
$definitions["Change Password"] = "&Auml;ndere das Passwort";
$definitions["Change password"] = "&Auml;ndere das Passwort";
$definitions["Change permissions"] = "Berechtigungen &auml;ndern";
$definitions["Change"] = "&Auml;ndern";
$definitions["Channel description"] = "Beschreibung des Kanals";
$definitions["Channel List"] = "Kanal-Liste";
$definitions["Channel title"] = "Titel des Kanals";
$definitions["Channel slug"] = "Kanal-URI";
$definitions["Channels"] = "Kan&auml;le";
$definitions["Choose a secure password of at least %s characters"] = "Choose a secure password of at least %s characters";
$definitions["Choose what people will see when they first visit your forum."] = "Choose what people will see when they first visit your forum.";
$definitions["Click on a member's name to remove them."] = "Click on a member's name to remove them.";
$definitions["Close registration"] = "Close registration";
$definitions["Confirm password"] = "Passwort best&auml;tigen";
$definitions["Context"] = "Context";
$definitions["Controls"] = "Controls";
$definitions["Conversation"] = "Unterhaltung";
$definitions["Conversations participated in"] = "Conversations participated in";
$definitions["Conversations started"] = "Unterhaltung begonnen";
$definitions["Conversations"] = "Unterhaltungen";
$definitions["Copy permissions from"] = "Berechtigungen kopieren von";
$definitions["Create Channel"] = "Kanal anlegen";
$definitions["Create Group"] = "Gruppe anlegen";
$definitions["Create Member"] = "Mitglied anlegen";
$definitions["Customize how users can become members of your forum."] = "Customize how users can become members of your forum.";
$definitions["Customize your forum's appearance"] = "&Auml;ndere das Design des Forums";

$definitions["Dashboard"] = "Dashboard";
$definitions["Default forum language"] = "Sprache (Standard)";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>L&ouml;sche</strong> alle Unterhaltungen.";
$definitions["Delete Channel"] = "Kanal l&ouml;schen";
$definitions["Delete conversation"] = "Unterhaltung l&ouml;schen";
$definitions["Delete member"] = "Mitglied l&ouml;schen";
$definitions["Delete Member"] = "L&ouml;sche Mitglied";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually.";
$definitions["Delete"] = "L&ouml;schen";
$definitions["Deleted %s by %s"] = "Gel&ouml;scht %s von %s";
$definitions["Disable"] = "Deaktivieren";
$definitions["Discard"] = "Abbrechen";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Don't have an account? <a href='%s' class='link-join'>Sign up!</a>";
$definitions["Don't repeat"] = "Don't repeat";

$definitions["Edit Channel"] = "Edit Channel";
$definitions["Edit Group"] = "Edit Group";
$definitions["Edit member groups"] = "Edit member groups";
$definitions["Edit your profile"] = "Edit your profile";
$definitions["Edit"] = "Edit";
$definitions["Edited %s by %s"] = "Edited %s by %s";
$definitions["Editing permissions"] = "Editing permissions";
$definitions["Email me when I'm added to a private conversation"] = "Email me when I'm added to a private conversation";
$definitions["Email me when someone posts in a conversation I have starred"] = "Email me when someone posts in a conversation I have followed";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Enable";
$definitions["Enabled"] = "Enabled";
$definitions["Enter a conversation title"] = "Titel der Unterhaltung";
$definitions["Error"] = "Fehler";
$definitions["esoTalk version"] = "esoTalk-Version";
$definitions["Everyone"] = "Everyone";

$definitions["Fatal Error"] = "Uh oh! It's a fatal error...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "Filter by name or group...";
$definitions["Filter conversations..."] = "Unterhaltungen filtern...";
$definitions["Find this post"] = "Diesen Beitrag finden";
$definitions["First posted"] = "Zuerst ver&ouml;ffentlicht";
$definitions["Follow to receive notifications"] = "Verfolgen, um Benachrichtigungen erhalten";
$definitions["For %s seconds"] = "For %s seconds";
$definitions["Forever"] = "F&uuml;r immer";
$definitions["Forgot?"] = "Vergessen?";
$definitions["Forgot Password"] = "Passwort vergessen";
$definitions["Forum header"] = "Kopfzeile des Forums";
$definitions["Forum language"] = "Sprache des Forums";
$definitions["Forum Settings"] = "Einstellungen";
$definitions["Forum Statistics"] = "Statistiken";
$definitions["Forum title"] = "Titel des Forums";
$definitions["forumDescription"] = "%s ist ein Internet-Forum &uuml;ber %s und %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Give this group the 'moderate' permission on all existing channels";
$definitions["Global permissions"] = "Global permissions";
$definitions["Go to top"] = "Nach oben";
$definitions["Group name"] = "Gruppenname";
$definitions["group.administrator"] = "Administrator";
$definitions["group.administrator.plural"] = "Administratoren";
$definitions["group.guest"] = "Gast";
$definitions["group.guest.plural"] = "G&auml;ste";
$definitions["group.member"] = "Mitglied";
$definitions["group.member.plural"] = "Mitglieder";
$definitions["group.Moderator"] = "Moderator";
$definitions["group.Moderator.plural"] = "Moderatoren";
$definitions["group.suspended"] = "Suspended";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Groups can be used to categorize members and give them certain privileges.";
$definitions["Groups"] = "Groups";

$definitions["Header"] = "Kopf";
$definitions["Header color"] = "Farbe des Kopfes";
$definitions["Hide"] = "Verstecken";
$definitions["Home page"] = "Startseite";
$definitions["HTML is allowed."] = "HTML ist erlaubt.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>.";
$definitions["Install esoTalk"] = "Installiere esoTalk";
$definitions["Install My Forum"] = "Installiere My Forum";
$definitions["Installed Languages"] = "Installierte Sprachen";
$definitions["Installed Plugins"] = "Installierte Plugins";
$definitions["Installed plugins"] = "Installierte Plugins";
$definitions["Installed Skins"] = "Installierte Skins";
$definitions["Installed skins"] = "Installierte skins";
$definitions["is %s"] = "is %s";

$definitions["Joined"] = "Beigetreten";
$definitions["Jump to last"] = "Zum Letzten springen";
$definitions["Jump to unread"] = "Zu den Ungelesenen springen";
$definitions["just now"] = "gerade eben";

$definitions["Keep me logged in"] = "Angemeldet bleiben";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author.";

$definitions["label.draft"] = "Entwurf";
$definitions["label.locked"] = "Gesperrt";
$definitions["label.muted"] = "Leise";
$definitions["label.private"] = "Privat";
$definitions["label.sticky"] = "Sticky";
$definitions["Labels"] = "Label";
$definitions["Last active"] = "Zuletzt aktiv";
$definitions["Last active %s"] = "Zuletzt aktiv %s";
$definitions["Latest News"] = "Aktuelle Neuigkeiten";
$definitions["Loading..."] = "Lade...";
$definitions["Lock"] = "Sperren";
$definitions["Log In"] = "Anmelden";
$definitions["Log Out"] = "Abmelden";

$definitions["Make member and online list visible to:"] = "Make member and online list visible to:";
$definitions["Manage Groups"] = "Gruppen verwalten";
$definitions["Manage Languages"] = "Sprachen verwalten";
$definitions["Manage your forum's channels (categories)"] = "Manage your forum's channels (categories)";
$definitions["Mark as read"] = "Mark as read";
$definitions["Mark all as read"] = "Alle als gelesen markieren";
$definitions["Mark listed as read"] = "Liste als gelesen markieren";
$definitions["Maximum size of %s. %s."] = "Maximale Gr&ouml;&szlig;e: %s (%s)";
$definitions["Member groups"] = "Benutzergruppen";
$definitions["Member list"] = "Liste der Benutzer";
$definitions["Member List"] = "Liste der Benutzer";
$definitions["Member privacy"] = "Member privacy";
$definitions["Members Allowed to View this Conversation"] = "Mitglieder, die diese Unterhaltung sehen d&uuml;rfen";
$definitions["Members Online"] = "Mitglieder online";
$definitions["Members"] = "Mitglieder";
$definitions["Mobile skin"] = "Mobile skin";
$definitions["Moderate"] = "Moderieren";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Move</strong> conversations to the following channel:";
$definitions["Mute conversation"] = "Mute conversation";
$definitions["MySQL database"] = "MySQL-Datenbank";
$definitions["MySQL host address"] = "MySQL Hostadresse";
$definitions["MySQL password"] = "MySQL Passwort";
$definitions["MySQL queries"] = "MySQL-Abfragen";
$definitions["MySQL table prefix"] = "MySQL Tabellen-Pr&auml;fix";
$definitions["MySQL username"] = "MySQL-Benutzername";
$definitions["MySQL version"] = "MySQL-Version";

$definitions["Name"] = "Name";
$definitions["never"] = "niemals";
$definitions["%s new"] = "%s neu";
$definitions["New conversation"] = "Neue Unterhaltung";
$definitions["New Conversation"] = "Neue Unterhaltung";
$definitions["New conversations in the past week"] = "Diese Woche neu: Unterhaltungen";
$definitions["New email"] = "Neue E-Mail";
$definitions["New members in the past week"] = "Diese Woche neu: Mitglieder";
$definitions["New password"] = "Neues Passwort";
$definitions["New posts in the past week"] = "Diese Woche neu: Beitr&auml;ge";
$definitions["New username"] = "Neuer Benutzername";
$definitions["Next Step"] = "N&auml;chster Schritt";
$definitions["Next"] = "Weiter";
$definitions["No preview"] = "Keine Vorschau";
$definitions["No"] = "Nein";
$definitions["Notifications"] = "Benachrichtigungen";
$definitions["Now"] = "Jetzt";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Open registration";
$definitions["optional"] = "optional";
$definitions["Order By:"] = "Sortieren nach:";
$definitions["Original Post"] = "Original-Beitrag";

$definitions["Page Not Found"] = "Seite nicht gefunden";
$definitions["Password"] = "Passwort";
$definitions["PHP version"] = "PHP-Version";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Antworten";
$definitions["Post count"] = "Post count";
$definitions["Posts"] = "Beitr&auml;ge";
$definitions["Preview"] = "Vorschau";
$definitions["Previous"] = "&Auml;ltere";

$definitions["Quote"] = "Zitat";
$definitions["quote"] = "zitieren";

$definitions["Read more"] = "Weiterlesen";
$definitions["Recent posts"] = "Letzte Beitr&auml;ge";
$definitions["Recover Password"] = "Recover Password";
$definitions["Registered members"] = "Registered members";
$definitions["Registration"] = "Registration";
$definitions["Remove avatar"] = "Avatar entfernen";
$definitions["Rename Member"] = "Mitglied umbenennen";
$definitions["Reply"] = "Antworten";
$definitions["Report a bug"] = "Fehler melden";
$definitions["Require users to confirm their email address"] = "Require users to confirm their email address";
$definitions["Restore"] = "Wiederherstellen";
$definitions["restore"] = "wiederherstellen";
$definitions["Reset"] = "Zur&uuml;cksetzen";

$definitions["Save Changes"] = "&Auml;nderungen speichern";
$definitions["Save Draft"] = "Entwurf speichern";
$definitions["Search conversations..."] = "Search conversations...";
$definitions["Search within this conversation..."] = "Diese Unterhaltung durchsuchen...";
$definitions["Search"] = "Suche";
$definitions["See the private conversations I've had with %s"] = "See the private conversations I've had with %s";
$definitions["Set a New Password"] = "Neues Passwort setzen";
$definitions["Settings"] = "Einstellungen";
$definitions["Show an image in the header"] = "Ein Bild im Kopf der Seite zeigen";
$definitions["Show matching posts"] = "Zeige gefundene Beitr&auml;ge";
$definitions["Show the channel list by default"] = "Show the channel list by default";
$definitions["Show the conversation list by default"] = "Show the conversation list by default";
$definitions["Show the forum title in the header"] = "Titel des Forums im Kopf der Seite anzeigen";
$definitions["Sign Up"] = "Sign Up";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Specify Setup Information";
$definitions["Star to receive notifications"] = "Verfolgen, um Benachrichtigungen zu erhalten";
$definitions["Starred"] = "Wird verfolgt";
$definitions["Start"] = "Start";
$definitions["Start a conversation"] = "Eine Unterhaltung beginnen";
$definitions["Start a new conversation"] = "Beginne eine neue Unterhaltung";
$definitions["Start a private conversation with %s"] = "Eine private Unterhaltung mit %s beginnen";
$definitions["Start Conversation"] = "Unterhaltung beginnen";
$definitions["Starting a conversation"] = "Eine Unterhaltung beginnen";
$definitions["Statistics"] = "Statistiken";
$definitions["statistic.conversation.plural"] = "%s Unterhaltungen";
$definitions["statistic.conversation"] = "%s Unterhaltung";
$definitions["statistic.member.plural"] = "%s Mitglieder";
$definitions["statistic.member"] = "%s Mitglied";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s Beitr&auml;ge";
$definitions["statistic.post"] = "%s Beitrag";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribe"] = "Abonnieren";
$definitions["Subscribed"] = "Abonniert";
$definitions["Subscription"] = "Abonnement";
$definitions["Suspend member"] = "Benutzer sperren";
$definitions["Suspend members."] = "Benutzer sperren.";
$definitions["Suspend"] = "Suspendieren";

$definitions["To get started with your forum, you might like to:"] = "To get started with your forum, you might like to:";

$definitions["Unhide"] = "Wieder anzeigen";
$definitions["Uninstall"] = "De-Installieren";
$definitions["Unlock"] = "Entsperren";
$definitions["Unmute conversation"] = "Unmute conversation";
$definitions["Unstarred"] = "Wird nicht verfolgt";
$definitions["Unsticky"] = "Unsticky";
$definitions["Unsubscribe new users by default"] = "Unsubscribe new users by default";
$definitions["Unsubscribe"] = "Unsubscribe";
$definitions["Unsubscribed"] = "Unsubscribed";
$definitions["Unsuspend member"] = "Unsuspend member";
$definitions["Unsuspend"] = "Unsuspend";
$definitions["Until someone replies"] = "Until someone replies";
$definitions["Untitled conversation"] = "Untitled conversation";
$definitions["Upgrade esoTalk"] = "Upgrade esoTalk";
$definitions["Use a background image"] = "Use a background image";
$definitions["Use for mobile"] = "Use for mobile";
$definitions["Use friendly URLs"] = "Use friendly URLs";
$definitions["Used to verify your account and subscribe to conversations"] = "Used to verify your account and subscribe to conversations";
$definitions["Username"] = "Username";
$definitions["Username or Email"] = "Username or Email";

$definitions["View %s's profile"] = "View %s's profile";
$definitions["View all notifications"] = "View all notifications";
$definitions["View more"] = "View more";
$definitions["View your profile"] = "View your profile";
$definitions["View"] = "View";
$definitions["Viewing: %s"] = "Viewing: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s posts";

$definitions["Warning"] = "Uh oh, something's not right!";
$definitions["Welcome to esoTalk!"] = "Welcome to esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "We've logged you in and taken you straight to your forum's administration panel. You're welcome.";
$definitions["Write a reply..."] = "Write a reply...";

$definitions["Yes"] = "Yes";
$definitions["You can manage channel-specific permissions on the channels page."] = "You can manage channel-specific permissions on the channels page.";
$definitions["Your current password"] = "Your current password";


// Messages.
$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.ajaxDisconnected"] = "Unable to communicate with the server. Wait a few seconds and <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>try again</a>, or <a href='' onclick='window.location.reload();return false'>refresh the page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.changesSaved"] = "Your changes were saved.";
$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log In</a> or <a href='%2\$s' class='link-join'>Sign Up</a> to reply!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "You have no notifications.";
$definitions["message.noPermission"] = "You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "<p>Hey %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mentioned you in a post";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "There is a new reply to '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "author:";
$definitions["gambit.contributor:"] = "contributor:";
$definitions["gambit.member"] = "member";
$definitions["gambit.myself"] = "myself";
$definitions["gambit.draft"] = "draft";
$definitions["gambit.locked"] = "locked";
$definitions["gambit.order by newest"] = "order by newest";
$definitions["gambit.order by replies"] = "order by replies";
$definitions["gambit.private"] = "private";
$definitions["gambit.random"] = "random";
$definitions["gambit.reverse"] = "reverse";
$definitions["gambit.starred"] = "followed";
$definitions["gambit.muted"] = "muted";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "unread";
$definitions["gambit.limit:"] = "limit:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "active today"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "active 1 day"; // what it actually evaluates to

$definitions["gambit.has replies"] = "has replies";
$definitions["gambit.has >0 replies"] = "has >0 replies";
$definitions["gambit.has >10 replies"] = "has >10 replies";

$definitions["gambit.has no replies"] = "has no replies";
$definitions["gambit.has 0 replies"] = "has 0 replies";

$definitions["gambit.dead"] = "dead";
$definitions["gambit.active >30 day"] = "active >30 day";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "second";
$definitions["gambit.minute"] = "minute";
$definitions["gambit.hour"] = "hour";
$definitions["gambit.day"] = "day";
$definitions["gambit.week"] = "week";
$definitions["gambit.month"] = "month";
$definitions["gambit.year"] = "year";
$definitions["gambit.last"] = "last"; // as in "active last 180 days"
$definitions["gambit.active"] = "active"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";