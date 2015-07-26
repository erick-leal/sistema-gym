<?php

/*
 * The MIT License
 *
 * Copyright 2014 Vadim Oparin <snusmumriken@art-focus.ru>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

class SemanticHtml extends CHtml {

    /**
     * Colors
     */
    const SEMANTIC_UI_COLOR_BLACK  = 'black';
    const SEMANTIC_UI_COLOR_BLUE   = 'blue';
    const SEMANTIC_UI_COLOR_ORANGE = 'orange';
    const SEMANTIC_UI_COLOR_GREEN  = 'green';
    const SEMANTIC_UI_COLOR_RED    = 'red';
    const SEMANTIC_UI_COLOR_PURPLE = 'purple';
    const SEMANTIC_UI_COLOR_TEAL   = 'teal';

    /**
     * Quazatron color scheme colors
     */
    const QUAZATRON_COLOR_LIGHT_AMBER      = 'light amber';
    const QUAZATRON_COLOR_AMBER            = 'amber';
    const QUAZATRON_COLOR_LIGHT_TANGERINE  = 'light tangerine';
    const QUAZATRON_COLOR_TANGERINE        = 'tangerine';
    const QUAZATRON_COLOR_LIGHT_CORALLINE  = 'light coralline';
    const QUAZATRON_COLOR_CORALLINE        = 'coralline';
    const QUAZATRON_COLOR_LIGHT_ALIZARIN   = 'light alizarin';
    const QUAZATRON_COLOR_ALIZARIN         = 'alizarin';
    const QUAZATRON_COLOR_LIGHT_LILAC      = 'light lilac';
    const QUAZATRON_COLOR_LILAC            = 'lilac';
    const QUAZATRON_COLOR_LIGHT_FUCHSIA    = 'light fuchsia';
    const QUAZATRON_COLOR_FUCHSIA          = 'fuchsia';
    const QUAZATRON_COLOR_LIGHT_BONDI_BLUE = 'light bondi-blue';
    const QUAZATRON_COLOR_BONDI_BLUE       = 'bondi-blue';
    const QUAZATRON_COLOR_LIGHT_AZURE      = 'light azure';
    const QUAZATRON_COLOR_AZURE            = 'azure';
    const QUAZATRON_COLOR_LIGHT_PISTACHIO  = 'light pistachio';
    const QUAZATRON_COLOR_PISTACHIO        = 'pistachio';
    const QUAZATRON_COLOR_LIGHT_MINT       = 'light mint';
    const QUAZATRON_COLOR_MINT             = 'mint';
    const QUAZATRON_COLOR_LIGHT_ARGENTINE  = 'light argentine';
    const QUAZATRON_COLOR_ARGENTINE        = 'argentine';
    const QUAZATRON_COLOR_LIGHT_ANTHRACITE = 'light anthracite';
    const QUAZATRON_COLOR_ANTHRACITE       = 'anthracite';

    /**
     * Segment types
     */
    const SEGMENT_TYPE_DEFAULT    = '';
    const SEGMENT_TYPE_VERTICAL   = 'vertical';
    const SEGMENT_TYPE_HORIZONTAL = 'horizontal';
    const SEGMENT_TYPE_PILED      = 'piled';
    const SEGMENT_TYPE_STACKED    = 'stacked';

    /**
     * Segment states
     */
    const SEGMENT_STATE_DEFAULT  = '';
    const SEGMENT_STATE_DISABLED = 'disabled';

    /**
     * Segment variations
     */
    const SEGMENT_VARIATION_INVERTED        = 'inverted';
    const SEGMENT_VARIATION_RAISED          = 'raised';
    const SEGMENT_VARIATION_CIRCULAR        = 'circular';
    const SEGMENT_VARIATION_RIGHT_FLOATED   = 'right floated';
    const SEGMENT_VARIATION_LEFT_FLOATED    = 'left floated';
    const SEGMENT_VARIATION_RIGHT_ALIGNED   = 'right aligned';
    const SEGMENT_VARIATION_CENTER_ALIGNED  = 'center aligned';
    const SEGMENT_VARIATION_JUSTIFIED       = 'justified';
    const SEGMENT_VARIATION_BASIC           = 'basic';
    const SEGMENT_VARIATION_TOP_ATTACHED    = 'top attached';
    const SEGMENT_VARIATION_ATTACHED        = 'attached';
    const SEGMENT_VARIATION_BOTTOM_ATTACHED = 'bottom attached';

    /**
     * Segment ordinality
     */
    const SEGMENT_ORDINALITY_PRIMARY   = 'primary';
    const SEGMENT_ORDINALITY_SECONDARY = 'secondary';
    const SEGMENT_ORDINALITY_TERTIARY  = 'tertiary';

    /**
     * Divider types
     */
    const DIVIDER_TYPE_DEFAULT         = '';
    const DIVIDER_TYPE_VERTICAL        = 'vertical';
    const DIVIDER_TYPE_HORIZONTAL      = 'horizontal';
    const DIVIDER_TYPE_VERTICAL_ICON   = 'vertical icon';
    const DIVIDER_TYPE_HORIZONTAL_ICON = 'horizontal icon';

    /**
     * Divider variations
     */
    const DIVIDER_VARIATION_INVERTED = 'inverted';
    const DIVIDER_VARIATION_FITTED   = 'fitted';
    const DIVIDER_VARIATION_SECTION  = 'section';
    const DIVIDER_VARIATION_CLEARING = 'clearing';

    /**
     * Content icons
     */
    const ICON_STANDARD_ARCHIVE             = 'archive';
    const ICON_STANDARD_ATTACHMENT          = 'attachment';
    const ICON_STANDARD_BROWSER             = 'browser';
    const ICON_STANDARD_BUG                 = 'bug';
    const ICON_STANDARD_CALENDAR            = 'calendar';
    const ICON_STANDARD_CART                = 'cart';
    const ICON_STANDARD_CERTIFICATE         = 'certificate';
    const ICON_STANDARD_CHAT                = 'chat';
    const ICON_STANDARD_CLOUD               = 'cloud';
    const ICON_STANDARD_CODE                = 'code';
    const ICON_STANDARD_COMMENT             = 'comment';
    const ICON_STANDARD_DASHBOARD           = 'dashboard';
    const ICON_STANDARD_DESKTOP             = 'desktop';
    const ICON_STANDARD_EMPTY_CALENDAR      = 'empty calendar';
    const ICON_STANDARD_EXTERNAL_URL        = 'external url';
    const ICON_STANDARD_EXTERNAL_URL_SIGN   = 'external url sign';
    const ICON_STANDARD_FILE                = 'file';
    const ICON_STANDARD_FILE_OUTLINE        = 'file outline';
    const ICON_STANDARD_FOLDER              = 'folder';
    const ICON_STANDARD_OPEN_FOLDER         = 'open folder';
    const ICON_STANDARD_OPEN_FOLDER_OUTLINE = 'open folder outline';
    const ICON_STANDARD_FOLDER_OUTLINE      = 'folder outline';
    const ICON_STANDARD_HELP                = 'help';
    const ICON_STANDARD_HOME                = 'home';
    const ICON_STANDARD_INBOX               = 'inbox';
    const ICON_STANDARD_INFO                = 'info';
    const ICON_STANDARD_INFO_LETTER         = 'info letter';
    const ICON_STANDARD_LEGAL               = 'legal';
    const ICON_STANDARD_LOCATION_ARROW      = 'location arrow';
    const ICON_STANDARD_MAIL                = 'mail';
    const ICON_STANDARD_MAIL_OUTLINE        = 'mail outline';
    const ICON_STANDARD_MAP                 = 'map';
    const ICON_STANDARD_MAP_MARKER          = 'map marker';
    const ICON_STANDARD_MOBILE              = 'mobile';
    const ICON_STANDARD_MUSIC               = 'music';
    const ICON_STANDARD_CHAT_OUTLINE        = 'chat outline';
    const ICON_STANDARD_COMMENT_OUTLINE     = 'comment outline';
    const ICON_STANDARD_PAYMENT             = 'payment';
    const ICON_STANDARD_PHOTO               = 'photo';
    const ICON_STANDARD_QR_CODE             = 'qr code';
    const ICON_STANDARD_QUESTION            = 'question';
    const ICON_STANDARD_RSS                 = 'rss';
    const ICON_STANDARD_RSS_SIGN            = 'rss sign';
    const ICON_STANDARD_SETTING             = 'setting';
    const ICON_STANDARD_SETTINGS            = 'settings';
    const ICON_STANDARD_SIGNAL              = 'signal';
    const ICON_STANDARD_SITEMAP             = 'sitemap';
    const ICON_STANDARD_TABLE               = 'table';
    const ICON_STANDARD_TABLET              = 'tablet';
    const ICON_STANDARD_TAG                 = 'tag';
    const ICON_STANDARD_TAGS                = 'tags';
    const ICON_STANDARD_TASKS               = 'tasks';
    const ICON_STANDARD_TERMINAL            = 'terminal';
    const ICON_STANDARD_TEXT_FILE           = 'text file';
    const ICON_STANDARD_TEXT_FILE_OUTLINE   = 'text file outline';
    const ICON_STANDARD_TIME                = 'time';
    const ICON_STANDARD_TRASH               = 'trash';
    const ICON_STANDARD_URL                 = 'url';
    const ICON_STANDARD_USER                = 'user';
    const ICON_STANDARD_USERS               = 'users';
    const ICON_STANDARD_VIDEO               = 'video';

    /**
     * User Actions icons
     */
    const ICON_STANDARD_ADD            = 'add';
    const ICON_STANDARD_ADD_SIGN       = 'add sign';
    const ICON_STANDARD_ADD_SIGN_BOX   = 'add sign box';
    const ICON_STANDARD_ADJUST         = 'adjust';
    const ICON_STANDARD_BOOKMARK_EMPTY = 'bookmark empty';
    const ICON_STANDARD_BOOKMARK       = 'bookmark';
    const ICON_STANDARD_CLOUD_DOWNLOAD = 'cloud download';
    const ICON_STANDARD_CLOUD_UPLOAD   = 'cloud upload';
    const ICON_STANDARD_COLLAPSE       = 'collapse';
    const ICON_STANDARD_CROP           = 'crop';
    const ICON_STANDARD_DOWNLOAD_DISK  = 'download disk';
    const ICON_STANDARD_DOWNLOAD       = 'download';
    const ICON_STANDARD_EDIT           = 'edit';
    const ICON_STANDARD_EDIT_SIGN      = 'edit sign';
    const ICON_STANDARD_EMPTY_FLAG     = 'empty flag';
    const ICON_STANDARD_EXCHANGE       = 'exchange';
    const ICON_STANDARD_EXPAND         = 'expand';
    const ICON_STANDARD_FILTER         = 'filter';
    const ICON_STANDARD_FLAG           = 'flag';
    const ICON_STANDARD_FORK_CODE      = 'fork code';
    const ICON_STANDARD_FORWARD_MAIL   = 'forward mail';
    const ICON_STANDARD_FULLSCREEN     = 'fullscreen';
    const ICON_STANDARD_HIDE           = 'hide';
    const ICON_STANDARD_LEVEL_DOWN     = 'level down';
    const ICON_STANDARD_LEVEL_UP       = 'level up';
    const ICON_STANDARD_OFF            = 'off';
    const ICON_STANDARD_REFRESH        = 'refresh';
    const ICON_STANDARD_REMOVE_CIRCLE  = 'remove circle';
    const ICON_STANDARD_REMOVE         = 'remove';
    const ICON_STANDARD_REMOVE_SIGN    = 'remove sign';
    const ICON_STANDARD_REORDER        = 'reorder';
    const ICON_STANDARD_REPLY_ALL_MAIL = 'reply all mail';
    const ICON_STANDARD_REPLY_MAIL     = 'reply mail';
    const ICON_STANDARD_RETWEET        = 'retweet';
    const ICON_STANDARD_SAVE           = 'save';
    const ICON_STANDARD_SCREENSHOT     = 'screenshot';
    const ICON_STANDARD_SEARCH         = 'search';
    const ICON_STANDARD_SHARE          = 'share';
    const ICON_STANDARD_SHARE_SIGN     = 'share sign';
    const ICON_STANDARD_SIGN_IN        = 'sign in';
    const ICON_STANDARD_SIGN_OUT       = 'sign out';
    const ICON_STANDARD_TINT           = 'tint';
    const ICON_STANDARD_UNHIDE         = 'unhide';
    const ICON_STANDARD_UPLOAD_DISK    = 'upload disk';
    const ICON_STANDARD_UPLOAD         = 'upload';

    /**
     * View Actions icons
     */
    const ICON_STANDARD_BLOCK_LAYOUT               = 'block layout';
    const ICON_STANDARD_COLUMN_LAYOUT              = 'column layout';
    const ICON_STANDARD_GRID_LAYOUT                = 'grid layout';
    const ICON_STANDARD_LIST_LAYOUT                = 'list layout';
    const ICON_STANDARD_RESIZE_FULL                = 'resize full';
    const ICON_STANDARD_RESIZE_HORIZONTAL          = 'resize horizontal';
    const ICON_STANDARD_RESIZE_SMALL               = 'resize small';
    const ICON_STANDARD_RESIZE_VERTICAL            = 'resize vertical';
    const ICON_STANDARD_SORT_ALPHABET_DESCENDING   = 'sort alphabet descending';
    const ICON_STANDARD_SORT_ALPHABET              = 'sort alphabet';
    const ICON_STANDARD_SORT_ASCENDING             = 'sort ascending';
    const ICON_STANDARD_SORT_ATTRIBUTES_DESCENDING = 'sort attributes descending';
    const ICON_STANDARD_SORT_ATTRIBUTES            = 'sort attributes';
    const ICON_STANDARD_SORT_DESCENDING            = 'sort descending';
    const ICON_STANDARD_SORT                       = 'sort';
    const ICON_STANDARD_SORT_ORDER_DESCENDING      = 'sort order descending';
    const ICON_STANDARD_SORT_ORDER                 = 'sort order';
    const ICON_STANDARD_ZOOM_IN                    = 'zoom in';
    const ICON_STANDARD_ZOOM_OUT                   = 'zoom out';

    /**
     * Text Actions icons
     */
    const ICON_STANDARD_ALIGN_CENTER        = 'align center';
    const ICON_STANDARD_ALIGN_JUSTIFY       = 'align justify';
    const ICON_STANDARD_ALIGN_LEFT          = 'align left';
    const ICON_STANDARD_ALIGN_RIGHT         = 'align right';
    const ICON_STANDARD_BOLD                = 'bold';
    const ICON_STANDARD_COPY                = 'copy';
    const ICON_STANDARD_CUT                 = 'cut';
    const ICON_STANDARD_ELLIPSIS_HORIZONTAL = 'ellipsis horizontal';
    const ICON_STANDARD_ELLIPSIS_VERTICAL   = 'ellipsis vertical';
    const ICON_STANDARD_FONT                = 'font';
    const ICON_STANDARD_INDENT_LEFT         = 'indent left';
    const ICON_STANDARD_INDENT_RIGHT        = 'indent right';
    const ICON_STANDARD_ITALIC              = 'italic';
    const ICON_STANDARD_LIST                = 'list';
    const ICON_STANDARD_MOVE                = 'move';
    const ICON_STANDARD_ORDERED_LIST        = 'ordered list';
    const ICON_STANDARD_PASTE               = 'paste';
    const ICON_STANDARD_PRINT               = 'print';
    const ICON_STANDARD_QUOTE_LEFT          = 'quote left';
    const ICON_STANDARD_QUOTE_RIGHT         = 'quote right';
    const ICON_STANDARD_STRIKETHROUGH       = 'strikethrough';
    const ICON_STANDARD_SUBSCRIPT           = 'subscript';
    const ICON_STANDARD_SUPERSCRIPT         = 'superscript';
    const ICON_STANDARD_TEXT_HEIGHT         = 'text height';
    const ICON_STANDARD_TEXT_WIDTH          = 'text width';
    const ICON_STANDARD_UNDERLINE           = 'underline';
    const ICON_STANDARD_UNDO                = 'undo';
    const ICON_STANDARD_UNLINK              = 'unlink';
    const ICON_STANDARD_UNORDERED_LIST      = 'unordered list';

    /**
     * Media Actions 
     */
    const ICON_STANDARD_BACKWARD      = 'backward';
    const ICON_STANDARD_FORWARD       = 'forward';
    const ICON_STANDARD_EJECT         = 'eject';
    const ICON_STANDARD_FAST_BACKWARD = 'fast backward';
    const ICON_STANDARD_FAST_FORWARD  = 'fast forward';
    const ICON_STANDARD_MUTE          = 'mute';
    const ICON_STANDARD_PAUSE         = 'pause';
    const ICON_STANDARD_PLAY_CIRCLE   = 'play circle';
    const ICON_STANDARD_PLAY          = 'play';
    const ICON_STANDARD_PLAY_SIGN     = 'play sign';
    const ICON_STANDARD_SHUFFLE       = 'shuffle';
    const ICON_STANDARD_REPEAT        = 'repeat';
    const ICON_STANDARD_STEP_BACKWARD = 'step backward';
    const ICON_STANDARD_STEP_FORWARD  = 'step forward';
    const ICON_STANDARD_STOP          = 'stop';
    const ICON_STANDARD_UNMUTE        = 'unmute';
    const ICON_STANDARD_VOLUME_DOWN   = 'volume down';
    const ICON_STANDARD_VOLUME_OFF    = 'volume off';
    const ICON_STANDARD_VOLUME_UP     = 'volume up';

    /**
     * Objects icons
     */
    const ICON_STANDARD_AMBULANCE         = 'ambulance';
    const ICON_STANDARD_ANCHOR            = 'anchor';
    const ICON_STANDARD_BARCODE           = 'barcode';
    const ICON_STANDARD_LAB               = 'lab';
    const ICON_STANDARD_BEER              = 'beer';
    const ICON_STANDARD_BELL_OUTLINE      = 'bell outline';
    const ICON_STANDARD_BOLT              = 'bolt';
    const ICON_STANDARD_BOOK              = 'book';
    const ICON_STANDARD_BRIEFCASE         = 'briefcase';
    const ICON_STANDARD_BUILDING          = 'building';
    const ICON_STANDARD_BULLHORN          = 'bullhorn';
    const ICON_STANDARD_BULLSEYE          = 'bullseye';
    const ICON_STANDARD_CAMERA            = 'camera';
    const ICON_STANDARD_CAMERA_RETRO      = 'camera retro';
    const ICON_STANDARD_COFFEE            = 'coffee';
    const ICON_STANDARD_DOCTOR            = 'doctor';
    const ICON_STANDARD_ERASER            = 'eraser';
    const ICON_STANDARD_FEMALE            = 'female';
    const ICON_STANDARD_FIGHTER_JET       = 'fighter jet';
    const ICON_STANDARD_FIRE_EXTINGUISHER = 'fire extinguisher';
    const ICON_STANDARD_FIRE              = 'fire';
    const ICON_STANDARD_CHECKERED_FLAG    = 'checkered flag';
    const ICON_STANDARD_FOOD              = 'food';
    const ICON_STANDARD_GAMEPAD           = 'gamepad';
    const ICON_STANDARD_GIFT              = 'gift';
    const ICON_STANDARD_GLASS             = 'glass';
    const ICON_STANDARD_GLOBE             = 'globe';
    const ICON_STANDARD_HDD               = 'hdd';
    const ICON_STANDARD_HEADPHONES        = 'headphones';
    const ICON_STANDARD_HOSPITAL          = 'hospital';
    const ICON_STANDARD_KEY               = 'key';
    const ICON_STANDARD_KEYBOARD          = 'keyboard';
    const ICON_STANDARD_LAPTOP            = 'laptop';
    const ICON_STANDARD_LEAF              = 'leaf';
    const ICON_STANDARD_LEMON             = 'lemon';
    const ICON_STANDARD_LIGHTBULB         = 'lightbulb';
    const ICON_STANDARD_MAGIC             = 'magic';
    const ICON_STANDARD_MAGNET            = 'magnet';
    const ICON_STANDARD_MALE              = 'male';
    const ICON_STANDARD_MEDKIT            = 'medkit';
    const ICON_STANDARD_MONEY             = 'money';
    const ICON_STANDARD_MOON              = 'moon';
    const ICON_STANDARD_PENCIL            = 'pencil';
    const ICON_STANDARD_PHONE             = 'phone';
    const ICON_STANDARD_PHONE_SIGN        = 'phone sign';
    const ICON_STANDARD_PIN               = 'pin';
    const ICON_STANDARD_PLANE             = 'plane';
    const ICON_STANDARD_PUZZLE_PIECE      = 'puzzle piece';
    const ICON_STANDARD_ROAD              = 'road';
    const ICON_STANDARD_ROCKET            = 'rocket';
    const ICON_STANDARD_SHIELD            = 'shield';
    const ICON_STANDARD_STETHOSCOPE       = 'stethoscope';
    const ICON_STANDARD_SUITCASE          = 'suitcase';
    const ICON_STANDARD_SUN               = 'sun';
    const ICON_STANDARD_TICKET            = 'ticket';
    const ICON_STANDARD_TROPHY            = 'trophy';
    const ICON_STANDARD_TRUCK             = 'truck';
    const ICON_STANDARD_UMBRELLA          = 'umbrella';
    const ICON_STANDARD_WRENCH            = 'wrench';

    /**
     * Status Indication icons
     */
    const ICON_STANDARD_BAN_CIRCLE          = 'ban circle';
    const ICON_STANDARD_CHECKMARK           = 'checkmark';
    const ICON_STANDARD_CHECKMARK_SIGN      = 'checkmark sign';
    const ICON_STANDARD_MINUS_CHECKBOX      = 'minus checkbox';
    const ICON_STANDARD_EMPTY_CHECKBOX      = 'empty checkbox';
    const ICON_STANDARD_CHECKED_CHECKBOX    = 'checked checkbox';
    const ICON_STANDARD_EXCLAMATION         = 'exclamation';
    const ICON_STANDARD_ATTENTION           = 'attention';
    const ICON_STANDARD_FROWN               = 'frown';
    const ICON_STANDARD_HEART_EMPTY         = 'heart empty';
    const ICON_STANDARD_HEART               = 'heart';
    const ICON_STANDARD_LOADING             = 'loading';
    const ICON_STANDARD_LOCK                = 'lock';
    const ICON_STANDARD_MEH                 = 'meh';
    const ICON_STANDARD_OK_CIRCLE           = 'ok circle';
    const ICON_STANDARD_OK_SIGN             = 'ok sign';
    const ICON_STANDARD_SMILE               = 'smile';
    const ICON_STANDARD_EMPTY_STAR          = 'empty star';
    const ICON_STANDARD_SHALF_EMPTY_TAR     = 'shalf empty tar';
    const ICON_STANDARD_HALF_STAR           = 'half star';
    const ICON_STANDARD_STAR                = 'star';
    const ICON_STANDARD_THUMBS_DOWN         = 'thumbs down';
    const ICON_STANDARD_THUMBS_DOWN_OUTLINE = 'thumbs down outline';
    const ICON_STANDARD_THUMBS_UP           = 'thumbs up';
    const ICON_STANDARD_THUMBS_UP_OUTLINE   = 'thumbs up outline';
    const ICON_STANDARD_UNLOCK_ALTERNATE    = 'unlock alternate';
    const ICON_STANDARD_UNLOCK              = 'unlock';
    const ICON_STANDARD_WARNING             = 'warning';

    /**
     * Symbols icons
     */
    const ICON_STANDARD_ANGLE_DOWN           = 'angle down';
    const ICON_STANDARD_ANGLE_LEFT           = 'angle left';
    const ICON_STANDARD_ANGLE_RIGHT          = 'angle right';
    const ICON_STANDARD_ANGLE_UP             = 'angle up';
    const ICON_STANDARD_ARROW_BOX_DOWN       = 'arrow box down';
    const ICON_STANDARD_ARROW_BOX_RIGHT      = 'arrow box right';
    const ICON_STANDARD_ARROW_BOX_UP         = 'arrow box up';
    const ICON_STANDARD_DOWN                 = 'down';
    const ICON_STANDARD_LEFT                 = 'left';
    const ICON_STANDARD_RIGHT                = 'right';
    const ICON_STANDARD_UP                   = 'up';
    const ICON_STANDARD_ASTERISK             = 'asterisk';
    const ICON_STANDARD_TRIANGLE_DOWN        = 'triangle down';
    const ICON_STANDARD_TRIANGLE_LEFT        = 'triangle left';
    const ICON_STANDARD_TRIANGLE_RIGHT       = 'triangle right';
    const ICON_STANDARD_TRIANGLE_UP          = 'triangle up';
    const ICON_STANDARD_DOWN_ARROW           = 'down arrow';
    const ICON_STANDARD_LEFT_ARROW           = 'left arrow';
    const ICON_STANDARD_RIGHT_ARROW          = 'right arrow';
    const ICON_STANDARD_UP_ARROW             = 'up arrow';
    const ICON_STANDARD_ARROW_SIGN_DOWN      = 'arrow sign down';
    const ICON_STANDARD_ARROW_SIGN_LEFT      = 'arrow sign left';
    const ICON_STANDARD_ARROW_SIGN_RIGHT     = 'arrow sign right';
    const ICON_STANDARD_ARROW_SIGN_UP        = 'arrow sign up';
    const ICON_STANDARD_CIRCLE_LEFT          = 'circle left';
    const ICON_STANDARD_CIRCLE_RIGHT         = 'circle right';
    const ICON_STANDARD_CIRCLE_UP            = 'circle up';
    const ICON_STANDARD_CIRCLE_DOWN          = 'circle down';
    const ICON_STANDARD_CIRCLE_BLANK         = 'circle blank';
    const ICON_STANDARD_CIRCLE               = 'circle';
    const ICON_STANDARD_DOUBLE_ANGLE_DOWN    = 'double angle down';
    const ICON_STANDARD_DOUBLE_ANGLE_LEFT    = 'double angle left';
    const ICON_STANDARD_DOUBLE_ANGLE_RIGHT   = 'double angle right';
    const ICON_STANDARD_DOUBLE_ANGLE_UP      = 'double angle up';
    const ICON_STANDARD_HAND_DOWN            = 'hand down';
    const ICON_STANDARD_HAND_LEFT            = 'hand left';
    const ICON_STANDARD_HAND_RIGHT           = 'hand right';
    const ICON_STANDARD_HAND_UP              = 'hand up';
    const ICON_STANDARD_LONG_ARROW_DOWN      = 'long arrow down';
    const ICON_STANDARD_LONG_ARROW_LEFT      = 'long arrow left';
    const ICON_STANDARD_LONG_ARROW_RIGHT     = 'long arrow right';
    const ICON_STANDARD_LONG_ARROW_UP        = 'long arrow up';
    const ICON_STANDARD_MINUS                = 'minus';
    const ICON_STANDARD_MINUS_SIGN_ALTERNATE = 'minus sign alternate';
    const ICON_STANDARD_MINUS_SIGN           = 'minus sign';
    const ICON_STANDARD_SIGN                 = 'sign';

    /**
     * Currency icon
     */
    const ICON_STANDARD_DOLLAR = 'dollar';
    const ICON_STANDARD_EURO   = 'euro';
    const ICON_STANDARD_POUND  = 'pound';
    const ICON_STANDARD_RUPEE  = 'rupee';
    const ICON_STANDARD_WON    = 'won';
    const ICON_STANDARD_YEN    = 'yen';
    const ICON_STANDARD_YUAN   = 'yuan';

    /**
     * Brands icons
     */
    const ICON_STANDARD_ADN              = 'adn';
    const ICON_STANDARD_ANDROID          = 'android';
    const ICON_STANDARD_APPLE            = 'apple';
    const ICON_STANDARD_BITBUCKET        = 'bitbucket';
    const ICON_STANDARD_BITBUCKET_SIGN   = 'bitbucket sign';
    const ICON_STANDARD_BITCOIN          = 'bitcoin';
    const ICON_STANDARD_CSS3             = 'css3';
    const ICON_STANDARD_DRIBBBLE         = 'dribbble';
    const ICON_STANDARD_DROPBOX          = 'dropbox';
    const ICON_STANDARD_FACEBOOK         = 'facebook';
    const ICON_STANDARD_FACEBOOK_SIGN    = 'facebook sign';
    const ICON_STANDARD_FACETIME_VIDEO   = 'facetime video';
    const ICON_STANDARD_FLICKR           = 'flickr';
    const ICON_STANDARD_FOURSQUARE       = 'foursquare';
    const ICON_STANDARD_GITHUB_ALTERNATE = 'github alternate';
    const ICON_STANDARD_GITHUB           = 'github';
    const ICON_STANDARD_GITHUB_SIGN      = 'github sign';
    const ICON_STANDARD_GITTIP           = 'gittip';
    const ICON_STANDARD_GOOGLE_PLUS      = 'google plus';
    const ICON_STANDARD_GOOGLE_PLUS_SIGN = 'google plus sign';
    const ICON_STANDARD_H_SIGN           = 'h sign';
    const ICON_STANDARD_HTML5            = 'html5';
    const ICON_STANDARD_INSTAGRAM        = 'instagram';
    const ICON_STANDARD_LINKEDIN         = 'linkedin';
    const ICON_STANDARD_LINKEDIN_SIGN    = 'linkedin sign';
    const ICON_STANDARD_LINUX            = 'linux';
    const ICON_STANDARD_MAXCDN           = 'maxcdn';
    const ICON_STANDARD_PINTEREST        = 'pinterest';
    const ICON_STANDARD_PINTEREST_SIGN   = 'pinterest sign';
    const ICON_STANDARD_RENREN           = 'renren';
    const ICON_STANDARD_SKYPE            = 'skype';
    const ICON_STANDARD_STACKEXCHANGE    = 'stackexchange';
    const ICON_STANDARD_TRELLO           = 'trello';
    const ICON_STANDARD_TUMBLR           = 'tumblr';
    const ICON_STANDARD_TUMBLR_SIGN      = 'tumblr sign';
    const ICON_STANDARD_TWITTER          = 'twitter';
    const ICON_STANDARD_TWITTER_SIGN     = 'twitter sign';
    const ICON_STANDARD_VK               = 'vk';
    const ICON_STANDARD_WEIBO            = 'weibo';
    const ICON_STANDARD_WINDOWS          = 'windows';
    const ICON_STANDARD_XING             = 'xing';
    const ICON_STANDARD_XING_SIGN        = 'xing sign';
    const ICON_STANDARD_YOUTUBE          = 'youtube';
    const ICON_STANDARD_YOUTUBE_PLAY     = 'youtube play';
    const ICON_STANDARD_YOUTUBE_SIGN     = 'youtube sign';

    /**
     * Basic Content icons
     */
    const ICON_BASIC_ATTACHMENT  = 'attachment';
    const ICON_BASIC_BARCODE     = 'barcode';
    const ICON_BASIC_BOOKMARK    = 'bookmark';
    const ICON_BASIC_CART        = 'cart';
    const ICON_BASIC_CHART       = 'chart';
    const ICON_BASIC_BAR_CHART   = 'bar chart';
    const ICON_BASIC_PIE_CHART   = 'pie chart';
    const ICON_BASIC_DATE        = 'date';
    const ICON_BASIC_DOC         = 'doc';
    const ICON_BASIC_DOCS        = 'docs';
    const ICON_BASIC_EMAIL       = 'email';
    const ICON_BASIC_FOLDER      = 'folder';
    const ICON_BASIC_OPEN_FOLDER = 'open folder';
    const ICON_BASIC_HOME        = 'home';
    const ICON_BASIC_MAIL        = 'mail';
    const ICON_BASIC_PHOTO       = 'photo';
    const ICON_BASIC_PHOTOS      = 'photos';
    const ICON_BASIC_SEARCH      = 'search';
    const ICON_BASIC_SETTING     = 'setting';
    const ICON_BASIC_SETTINGS    = 'settings';
    const ICON_BASIC_TAG         = 'tag';
    const ICON_BASIC_TAGS        = 'tags';
    const ICON_BASIC_TIME        = 'time';
    const ICON_BASIC_TOP_LIST    = 'top list';
    const ICON_BASIC_TRASH       = 'trash';
    const ICON_BASIC_COMMUNITY   = 'community';
    const ICON_BASIC_URL         = 'url';
    const ICON_BASIC_USER        = 'user';
    const ICON_BASIC_USERS       = 'users';
    const ICON_BASIC_CHAT        = 'chat';

    /**
     * Basic Special Content icons
     */
    const ICON_BASIC_TROPHY = 'trophy';
    const ICON_BASIC_CLOUD  = 'cloud';
    const ICON_BASIC_FLIGHT = 'flight';
    const ICON_BASIC_GIFT   = 'gift';
    const ICON_BASIC_DOLLAR = 'dollar';
    const ICON_BASIC_LAB    = 'lab';
    const ICON_BASIC_RSS    = 'rss';

    /**
     * Basic User Actions icons
     */
    const ICON_BASIC_ADD_USER   = 'add user';
    const ICON_BASIC_BLOCK      = 'block';
    const ICON_BASIC_HIDE       = 'hide';
    const ICON_BASIC_UNHIDE     = 'unhide';
    const ICON_BASIC_LOCK       = 'lock';
    const ICON_BASIC_UNLOCK     = 'unlock';
    const ICON_BASIC_FLAG       = 'flag';
    const ICON_BASIC_CANCEL     = 'cancel';
    const ICON_BASIC_CLOSE      = 'close';
    const ICON_BASIC_DELETE     = 'delete';
    const ICON_BASIC_CHECK      = 'check';
    const ICON_BASIC_EDIT       = 'edit';
    const ICON_BASIC_OPEN       = 'open';
    const ICON_BASIC_EXPORT     = 'export';
    const ICON_BASIC_FORWARD    = 'forward';
    const ICON_BASIC_UPLOAD     = 'upload';
    const ICON_BASIC_LIKE       = 'like';
    const ICON_BASIC_DISLIKE    = 'dislike';
    const ICON_BASIC_PIN        = 'pin';
    const ICON_BASIC_STAR       = 'star';
    const ICON_BASIC_EMPTY_STAR = 'empty star';
    const ICON_BASIC_HALF_STAR  = 'half star';
    const ICON_BASIC_PRINT      = 'print';
    const ICON_BASIC_COMMENT    = 'comment';

    /**
     * Basic View icons
     */
    const ICON_BASIC_CONTENT           = 'content';
    const ICON_BASIC_GRID_LAYOUT       = 'grid layout';
    const ICON_BASIC_BLOCK_LAYOUT      = 'block layout';
    const ICON_BASIC_LIST_LAYOUT       = 'list layout';
    const ICON_BASIC_RESIZE_FULL       = 'resize full';
    const ICON_BASIC_RESIZE_HORIZONTAL = 'resize horizontal';
    const ICON_BASIC_RESIZE_SMALL      = 'resize small';
    const ICON_BASIC_RESIZE_VERTICAL   = 'resize vertical';
    const ICON_BASIC_ZOOM_IN           = 'zoom in';
    const ICON_BASIC_ZOOM_OUT          = 'zoom out';

    /**
     * Basic Media Actions icons
     */
    const ICON_BASIC_EJECT             = 'eject';
    const ICON_BASIC_FAST_FORWARD      = 'fast-forward';
    const ICON_BASIC_PAUSE             = 'pause';
    const ICON_BASIC_PLAY              = 'play';
    const ICON_BASIC_TO_START          = 'to-start';
    const ICON_BASIC_TO_END            = 'to-end';
    const ICON_BASIC_SHUFFLE           = 'shuffle';
    const ICON_BASIC_CLOCKWISE         = 'clockwise';
    const ICON_BASIC_COUNTER_CLOCKWISE = 'counter clockwise';

    /**
     * Basic Objects icons
     */
    const ICON_BASIC_BOOK       = 'book';
    const ICON_BASIC_CALENDAR   = 'calendar';
    const ICON_BASIC_COLOR      = 'color';
    const ICON_BASIC_DESK_GLOBE = 'desk globe';
    const ICON_BASIC_FIRE       = 'fire';
    const ICON_BASIC_GLOBE      = 'globe';
    const ICON_BASIC_HEADPHONES = 'headphones';
    const ICON_BASIC_ID         = 'id';
    const ICON_BASIC_IDEA       = 'idea';
    const ICON_BASIC_LIGHTNING  = 'lightning';
    const ICON_BASIC_MONEY      = 'money';
    const ICON_BASIC_PAINT      = 'paint';

    /**
     * Basic Indications icons
     */
    const ICON_BASIC_CANCEL_CIRCLE    = 'cancel circle';
    const ICON_BASIC_ASTERISK         = 'asterisk';
    const ICON_BASIC_ATTENTION_CIRCLE = 'attention circle';
    const ICON_BASIC_ATTENTION        = 'attention';
    const ICON_BASIC_EMPTY_HEART      = 'empty heart';
    const ICON_BASIC_HEART            = 'heart';
    const ICON_BASIC_THUMBS_DOWN      = 'thumbs down';
    const ICON_BASIC_THUMBS_UP        = 'thumbs up';
    const ICON_BASIC_TERMINAL         = 'terminal';
    const ICON_BASIC_DIRECTION        = 'direction';
    const ICON_BASIC_LOCATION         = 'location';
    const ICON_BASIC_HELP             = 'help';
    const ICON_BASIC_INFO             = 'info';
    const ICON_BASIC_MIC              = 'mic';
    const ICON_BASIC_OFF              = 'off';
    const ICON_BASIC_ADD              = 'add';

    /**
     * Basic Symbols icons
     */
    const ICON_BASIC_LEFT_ARROW     = 'left arrow';
    const ICON_BASIC_LEFT_TRIANGLE  = 'left triangle';
    const ICON_BASIC_LEFT           = 'left';
    const ICON_BASIC_RIGHT          = 'right';
    const ICON_BASIC_RIGHT_TRIANGLE = 'right triangle';
    const ICON_BASIC_RIGHT_ARROW    = 'right arrow';
    const ICON_BASIC_UP             = 'up';
    const ICON_BASIC_UP_TRIANGLE    = 'up triangle';
    const ICON_BASIC_UP_ARROW       = 'up arrow';
    const ICON_BASIC_DOWN_ARROW     = 'down arrow';
    const ICON_BASIC_DOWN_TRIANGLE  = 'down triangle';
    const ICON_BASIC_DOWN           = 'down';
    const ICON_BASIC_CUBE           = 'cube';
    const ICON_BASIC_MINUS          = 'minus';
    const ICON_BASIC_PLUS           = 'plus';

    /**
     * Basic Websites icons
     */
    const ICON_BASIC_FACEBOOK = 'facebook';
    const ICON_BASIC_TWITTER  = 'twitter';
    const ICON_BASIC_GITHUB   = 'github';

    /**
     * Icon states
     */
    const ICON_STATE_DISABLED = 'disabled';

    /**
     * Icon sizes
     */
    const ICON_SIZE_SMALL   = 'small';
    const ICON_SIZE_REGULAR = '';
    const ICON_SIZE_LARGE   = 'large';
    const ICON_SIZE_BIG     = 'big';
    const ICON_SIZE_HUGE    = 'huge';
    const ICON_SIZE_MASSIVE = 'massive';

    /**
     * Icon variations
     */
    const ICON_VARIATION_LINK                     = 'link';
    const ICON_VARIATION_HORIZONTALLY_FLIPPED     = 'horizontally flipped';
    const ICON_VARIATION_VERTICALLY_FLIPPED       = 'vertically flipped';
    const ICON_VARIATION_CLOCKWISE_ROTATED        = 'clockwise rotated';
    const ICON_VARIATION_COUNTERCLOCKWISE_ROTATED = 'counterclockwise rotated';
    const ICON_VARIATION_CIRCULAR                 = 'circular';
    const ICON_VARIATION_SQUARE                   = 'square';
    const ICON_VARIATION_INVERTED                 = 'inverted';

    /**
     * Header types
     */
    const HEADER_TYPE_STANDARD = '';
    const HEADER_TYPE_ICON     = 'icon';
    const HEADER_TYPE_DIVIDING = 'dividing';
    const HEADER_TYPE_BLOCK    = 'block';
    const HEADER_TYPE_INVERTED = 'block';

    /**
     * Header states
     */
    const HEADER_STATE_DISABLED = 'disabled';

    /**
     * Header sizes
     */
    const HEADER_SIZE_HUGE   = 'huge';
    const HEADER_SIZE_LARGE  = 'large';
    const HEADER_SIZE_MEDIUM = 'medium';
    const HEADER_SIZE_SMALL  = 'small';
    const HEADER_SIZE_TINY   = 'tiny';

    /**
     * Header variations
     */
    const HEADER_VARIATION_TOP_ATTACHED    = 'top attached';
    const HEADER_VARIATION_BOTTOM_ATTACHED = 'bottom attached';
    const HEADER_VARIATION_RIGHT_FLOATED   = 'right floated';
    const HEADER_VARIATION_LEFT_FLOATED    = 'left floated';
    const HEADER_VARIATION_RIGHT_ALIGNED   = 'right aligned';
    const HEADER_VARIATION_LEFT_ALIGNED    = 'left aligned';
    const HEADER_VARIATION_JUSTIFIED       = 'justified';
    const HEADER_VARIATION_CENTER_ALIGNED  = 'center aligned';

    /**
     * Label types
     */
    const LABEL_TYPE_BASIC                 = '';
    const LABEL_TYPE_LEFT_CORNER           = 'left corner';
    const LABEL_TYPE_RIGHT_CORNER          = 'right corner';
    const LABEL_TYPE_RIBBON                = 'ribbon';
    const LABEL_TYPE_TOP_ATTACHED          = 'top attached';
    const LABEL_TYPE_TOP_LEFT_ATTACHED     = 'top left attached';
    const LABEL_TYPE_TOP_RIGHT_ATTACHED    = 'top right attached';
    const LABEL_TYPE_BOTTOM_ATTACHED       = 'bottom attached';
    const LABEL_TYPE_BOTTOM_LEFT_ATTACHED  = 'bottom left attached';
    const LABEL_TYPE_BOTTOM_RIGHT_ATTACHED = 'bottom right attached';

    /**
     * Label variations
     */
    const LABEL_VARIATION_HORIZONTAL     = 'horizontal';
    const LABEL_VARIATION_CIRCULAR       = 'circular';
    const LABEL_VARIATION_FLOATING       = 'floating';
    const LABEL_VARIATION_POINTING       = 'pointing';
    const LABEL_VARIATION_POINTING_LEFT  = 'pointing left';
    const LABEL_VARIATION_POINTING_RIGHT = 'pointing right';
    const LABEL_VARIATION_POINTING_BELOW = 'pointing below';

    /**
     * Label sizes
     */
    const LABEL_SIZE_LARGE = 'large';
    const LABEL_SIZE_SMALL = 'small';

    /**
     * Message types
     */
    const MESSAGE_TYPE_BASIC = '';
    const MESSAGE_TYPE_ICON  = 'icon';

    /**
     * Message states
     */
    const MESSAGE_STATE_HIDDEN  = 'hidden';
    const MESSAGE_STATE_VISIBLE = 'visible';

    /**
     * Message variations
     */
    const MESSAGE_VARIATION_FLOATING = 'floating';
    const MESSAGE_VARIATION_COMPACT  = 'compact';
    const MESSAGE_VARIATION_ATTACHED = 'attached';

    /**
     * Message sizes
     */
    const MESSAGE_SIZE_SMALL   = 'small';
    const MESSAGE_SIZE_REGULAR = '';
    const MESSAGE_SIZE_LARGE   = 'large';
    const MESSAGE_SIZE_HUGE    = 'huge';
    const MESSAGE_SIZE_MASSIVE = 'massive';

    /**
     * Message formats
     */
    const MESSAGE_FORMAT_WARNING = 'warning';
    const MESSAGE_FORMAT_INFO    = 'info';
    const MESSAGE_FORMAT_SUCCESS = 'success';
    const MESSAGE_FORMAT_ERROR   = 'error';

    /**
     * Adds CSS class to $htmlOptions['class'] property.
     * @param string $class
     * @param array $htmlOptions HTML attributes
     */
    public static function addCssClass($class, &$htmlOptions) {
        if (!array_key_exists('class', $htmlOptions)) {
            $htmlOptions['class'] = $class;
        } else {
            if (0 == substr_count($htmlOptions['class'], $class)) {
                $htmlOptions['class'] .= ' ' . $class;
            }
        }
    }

    /**
     * Extracts option from $htmlOptions array.
     * @param string $attribute htmlOption name
     * @param array $htmlOptions HTML attributes.
     * @return mixed htmlOption value or false if not set.
     */
    public static function extractHtmlOption($attribute, &$htmlOptions) {
        if (array_key_exists($attribute, $htmlOptions)) {
            $retval = $htmlOptions[$attribute];
            unset($htmlOptions[$attribute]);
            return $retval;
        }
        return false;
    }

    /**
     * Add attributes from $htmlOptions as CSS classes.
     * @param array $attributes list of attributes names.
     * @param array $htmlOptions HTML attributes.
     */
    public static function htmlOptionsToCssClass($attributes, &$htmlOptions) {
        foreach ($attributes as $attribute) {
            if (false !== $class = self::extractHtmlOption($attribute, $htmlOptions)) {
                self::addCssClass($class, $htmlOptions);
            }
        }
    }

    /**
     * Basic HTML elements.
     * ********************************************************************** */

    /**
     * Generates an unordered list element.
     * @param array $items list items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated unordered list.
     */
    public static function unorderedList($items, $htmlOptions = array()) {
        $output = '';
        foreach ($items as $item) {
            if (is_array($item)) {
                $output .= parent::tag('li', array_key_exists('htmlOptions', $item) ? $item['htmlOptions'] : array(), $item['content']);
            } else {
                $output .= parent::tag('li', array(), $item);
            }
        }
        return parent::tag('ul', $htmlOptions, $output);
    }

    /**
     * Semantic UI HTML elements.
     * Elements are the basic building blocks of a website.
     * ********************************************************************** */
    public static function button($label, $htmlOptions = array()) {
        
    }

    /**
     * Header
     * Headers provide a short summary of content.
     * @param string $label
     * @param array $htmlOptions additional HTML attributes.
     * @param string $tag html tag to render with.
     * @return string the generated header.
     */
    public static function header($label, $htmlOptions = array(), $tag = 'div') {
        $output    = $label;
        self::addCssClass('ui', $htmlOptions);
        self::htmlOptionsToCssClass(array('color', 'size', 'type', 'state', 'variation',), $htmlOptions);
        self::addCssClass('header', $htmlOptions);
        if (false !== $subheader = self::extractHtmlOption('subheader', $htmlOptions)) {
            $output .= "\n" . parent::tag('div', array('class' => 'sub header',), $subheader);
        }
        if (false !== $icon = self::extractHtmlOption('icon', $htmlOptions)) {
            $output = self::icon($icon) . "\n" . $output;
        }
        return parent::tag($tag, $htmlOptions, $output);
    }

    /**
     * Icon
     * An icon is a glyph used to represent another concept more simply.
     * @param type $name icon name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated icon.
     */
    public static function icon($name, $htmlOptions = array()) {
        self::htmlOptionsToCssClass(array('color', 'size', 'state', 'variation',), $htmlOptions);
        self::addCssClass($name, $htmlOptions);
        self::addCssClass('icon', $htmlOptions);
        return parent::openTag('i', $htmlOptions) . parent::closeTag('i');
    }

    /**
     * Label
     * Labels give descriptions to pieces of content.
     * @param type $content label content.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated label.
     */
    public static function label($content, $htmlOptions = array()) {
        self::addCssClass('ui', $htmlOptions);
        if (false !== $link = self::extractHtmlOption('link', $htmlOptions)) {
            $output = '';
            if (false !== $icon   = self::extractHtmlOption('icon', $htmlOptions)) {
                $output = self::icon($icon) . "\n" . $output;
            }
            if (false !== $detail = self::extractHtmlOption('detail', $htmlOptions)) {
                $output .= "\n" . parent::tag('div', array('class' => 'detail',), $detail);
            }
            $output = $content . "\n" . parent::link($output, $link, array('class' => 'detail',));
        } else {
            $output = $content;
            if (false !== $icon   = self::extractHtmlOption('icon', $htmlOptions)) {
                $output = self::icon($icon) . "\n" . $output;
            }
            if (false !== $detail = self::extractHtmlOption('detail', $htmlOptions)) {
                $output .= "\n" . parent::tag('div', array('class' => 'detail',), $detail);
            }
        }
        self::addCssClass('label', $htmlOptions);
        return parent::tag('div', $htmlOptions, $output);
    }

    /**
     * Semantic UI HTML collections.
     * SemanticUI collections are elements which contain other elements which
     * often appear together.
     * ********************************************************************** */

    /**
     * Message
     * Messages alert a user to information they must immediately consider
     * before proceeding on to the normal content of the page.
     * @param mixed $content
     * @param array $htmlOptions
     * @param string $header
     * @return string the generated message.
     */
    public static function message($content = '', $htmlOptions = array(), $header = '') {
        self::addCssClass('ui', $htmlOptions);
        self::htmlOptionsToCssClass(array('size', 'type', 'state', 'variation', 'format',), $htmlOptions);
        $output = '';
        if (is_array($header)) {
            $output .= parent::tag('div', $header['label'], array_key_exists('htmlOptions', $header) ? $header['htmlOptions'] : array());
        } elseif (!empty($header)) {
            $output .= parent::tag('div', $header, array('class' => 'header',));
        }
        if (is_array($content)) {
            $output .= self::unorderedList($content);
        } else {
            foreach (explode("\n", $content) as $line) {
                $output .= parent::tag('p', trim($line));
            }
        }
        self::addCssClass('message', $htmlOptions);
        return parent::tag('div', $htmlOptions, $output);
    }

}
