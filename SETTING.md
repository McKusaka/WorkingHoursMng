# SETTING �����菇


## ������ъ�


    ��Apache
    Version : 2.2
    �_�E�����[�h : http://httpd.apache.org/download.cgi

    ��PHP
    Version : 5.2
    �_�E�����[�h : http://www.php.net/downloads.php
    �g�����W���[�� : mbstring,mysql
    �O�����C�u���� : PEAR/MDB2(2.4.0),PEAR/File_Archive(1.5.5)
                     
    ��MySQL
    Version : 5.5
    �_�E�����[�h: http://dev.mysql.com/downloads/


## ���ݒ�


####���O��

Apache�APHP�AMySQL������\�Ȋ��ł���K�v������܂��B

####���C���X�g�[��


#####GitHub�̃��|�W�g����Clone����ꍇ

    cd �sWeb�T�[�o�h�L�������g���[�g�t
    git clone --recursive git@github.com:MightyCraft/WorkingHoursMng.git

#####GitHub����\�[�X���_�E�����[�h���C���X�g�[������ꍇ

1. GitHub����\�[�X���_�E�����[�h���܂��B  
    https://github.com/MightyCraft/WorkingHoursMng.git
1. Web�T�[�o�̌��J�p�f�B���N�g���̃h�L�������g���[�g�ȉ��ɁA�𓀂����t�@�C����W�J���܂��B
2. GitHub����_�E�����[�h�����t�@�C������L�t�H���_�ȉ��ɉ𓀁E�ۑ����܂��B

�ȉ��̃f�B���N�g���\���ɂȂ�悤�ɁA�ۑ����܂��B
		
	/
	  WorkingHoursMng/
        app/
        cache/
        documentroot/
        log/
        mcweb/

#####���ӎ���

* log�t�H���_��cache�t�H���_�������ꍇ�́A��t�H���_�ł悢�̂ŁA�K���쐬���Ă��������B
* log�t�H���_��cache�t�H���_�́A�t�H���_�ւ̏������݌��������悤�ɐݒ肵�Ă��������B  
  (Linux�T�[�o��ɍ쐬����ꍇ�́A�A�N�Z�X������777�ɕύX���Ă��������B)

####���V���{���b�N�����N�̍쐬

�V���{���b�N�����N�𐶐����܂��B
	
**Windows���̏ꍇ**

linkd�R�}���h�����݂��Ȃ��ꍇ�́A�_�E�����[�h���Ă��������B
		
�ݒ���@�́A`linkd.exe`�́A�p�X�̒ʂ��Ă���Ƃ���ɔz�u���Ă��������B

`�sC:\WINDOWS\system32\�t`�������߂ł��B

cmd���N�����A`�sWeb�T�[�o�h�L�������g���[�g�t/WorkingHoursMng/documentroot/`�f�B���N�g���Ɉړ��������ƂɁA
�ȉ��̃R�}���h�����s���Ă��������B

    linkd link �sWeb�T�[�o�h�L�������g���[�g�t\WorkingHoursMng\app\html

**Linux���̏ꍇ**

`�sWeb�T�[�o�h�L�������g���[�g�t/WorkingHoursMng/documentroot/`�ȉ���
`�sWeb�T�[�o�h�L�������g���[�g�t/WorkingHoursMng/app/html`�ւ̃V���{���b�N�����N�𐶐����܂��B


#####documentroot�������}

    development	 - �J���җp�֗�PHP�t�H���_
    link		 - "../app/html"�ւ̃V���{���b�N�����N
    -.htaccess
    entry.php

�� �V���{���b�N�����N��HTML�Ȃǂ��ی����ɂȂ��Ă��܂��Ƃ����S�z�����邩������܂��񂪁A
mod_rewrite���摜�ȊO�ւ̃A�N�Z�X��h���悤�ɂȂ��Ă��܂��B  

�� ���ݒ�ɂ���ĎQ�Ƃ���documentroot�����}�ƈقȂ�ꍇ������܂��B��q�́u�e��A�v���P�[�V�����ݒ� �������v �Q��

####���e��ݒ�

#####�ݒ�t�@�C��(release.ini.php�j�̐ݒ���@ 

1. `app/define/release.ini.php.sample`�����l�[��  
    release.ini.php.sample  
    ��  
    release.ini.php
1. PEAR�ւ̃p�X��ݒ�
1. **URL_DOMAIN_ROOT**�ݒ�	�T�C�gURL��documentroot�p�X�w��	(�� �Ō�Ɂu/�v������)
1. **URL_SITE_ROOT**�ݒ�	    �T�C�gURL��documentroot�p�X�w��	(�� �Ō�Ɂu/�v������)
1. **URL_FRAMEWORK_PHP**�ݒ�	�T�C�gURL��documentroot�p�X�w��	(�� �Ō�Ɂu/�v�����Ȃ�)
1. **DIR_LIB_ROOT**�ݒ�	    �ۑ��t�@�C���p�X�w��		    (�� �Ō�Ɂu/�v�����Ȃ�)
1. DB�ڑ��̐ݒ�
    `DatabaseSetting::setMaster('mysql://[���[�UID]:[�p�X���[�h]@[�T�[�o]/[DB��]?charset=[�����Z�b�g]');`
	
����q�́uMySQL�ݒ�v�Ŏ��ۂ̏����f�[�^�x�[�X�ݒ���������܂��B  
��3�`6�⑫ Windows���̏ꍇ�́A�h���C�u�́w�啶���x�B\�́u/�v�ɂ���B

######�L�q��

    //2. PEAR�ւ̃p�X��ݒ�
    set_include_path('C:/app/xampp/php/PEAR');
    �E
    �E
    //3. URL_DOMAIN_ROOT	�T�C�gURL��documentroot�p�X�w��
    define('URL_DOMAIN_ROOT', 'http://localhost/WorkingHoursMng/documentroot/');
    //4. URL_SITE_ROOT	    �T�C�gURL��documentroot�p�X�w��
    define('URL_SITE_ROOT', 'http://localhost/WorkingHoursMng/documentroot/');
    //5. URL_FRAMEWORK_PHP	�T�C�gURL��documentroot�p�X�w��
    define('URL_FRAMEWORK_PHP', 'http://localhost/WorkingHoursMng/documentroot');
    �E
    �E
    //6. DIR_LIB_ROOT	    �ۑ��t�@�C���p�X�w��
    define('DIR_LIB_ROOT',	'C:/app/xampp/htdocs/WorkingHoursMng');
    �E
    �E
    //7. DB�ڑ��̐ݒ�
    DatabaseSetting::setMaster('mysql://root:pass@localhost/working_hours_mng?charset=utf8');
    DatabaseSetting::setSlaves(
    array(
    	'mysql://root:pass@localhost/working_hours_mng?charset=utf8',
    		'mysql://root:pass@localhost/working_hours_mng?charset=utf8',
    		'mysql://root:pass@localhost/working_hours_mng?charset=utf8'
    	)
		
�� ���ݒ�ɂ���ĎQ�Ƃ���ݒ�t�@�C�����قȂ�ꍇ������܂��B�u�e��A�v���P�[�V�����ݒ� ������ �Q�Ɓv
		
#####��MySQL�ݒ�

`create_working_hours_mng.sql`�̃X�N���v�g�����s���܂��B
		
#####��Apache�ݒ�

Apache Portable Runtime library �� IPv6���T�|�[�g���Ă��Ȃ��ꍇ��`httpd.conf`�ɉ��L�C�����s���܂��B
		
    Listen 80
    ��
    Listen 0.0.0.0:80
	
#####��Web�H���\�ɊǗ����[�U�Ń��O�C���o����Ί��ݒ芮��

ID/PASS root/root	
    `http://�sWEB�T�[�o�A�h���X�t/WorkingHoursMng/documentroot/`

###�e��A�v���P�[�V�����ݒ�


#####�����[�U�쐬

�A�J�E���g����ʂ�胆�[�U��o�^
(�A�J���E���g�Ǘ����A�J�E���g�ꗗ �V�K�ǉ�����)

���̑��K�v������΃N���C�A���g�E�v���W�F�N�g�E�}�X�^�f�[�^���̓o�^���s���܂��B  
���K�v�����E�o�^���@���ɂ��Ă͓����́uREFERENCE.md�v�Q��

#####��������

���V�X�e���ł͊��ݒ���g�p���āA���ݗL���Ȑݒ�t�@�C�������[�h����@�\�������Ă��܂��B 
	
#####��`��

�ȉ��̂R�̊�����`����Ă���

�����ɎQ�Ƃ���`�sWeb�T�[�o�h�L�������g���[�g�t/WorkingHoursMng/documentroot/`�z���̐ݒ�t�@�C�����قȂ�܂��B
	  

1. ���[�J����  
�\�[�X�Ɏ������S���҂̍��PC�ɍ쐬�����Ɨp����z�肵����`�ł��B  
�ݒ�t�@�C�� `local.ini.php` ���Q��	  
2. �f�o�b�O��  
�C�������\�[�X�̓���m�F����z�肵����`�ł��B  
�ݒ�t�@�C�� `debug.ini.php` ���Q��
3. �����[�X��  
���ۂɉ^�p����{�Ԋ���z�肵����`�ł��B  
�ݒ�t�@�C�� `release.ini.php` ���Q��

�������`****.ini.php.sample`�Ƃ����u.sample�v�t���̃t�@�C�������݂���̂�
�u.sample�v�����Ƀ��l�[�����Ďg�p���ĉ������B

#####�ݒ���@
	 
`�sWeb�T�[�o�h�L�������g���[�g�t/WorkingHoursMng/documentroot/`�z���ɋK��̃t�@�C����z�u���邱�ƂŊ��w�肪�\�ł��B

1. ���[�J����  
  `.local` �t�@�C��(���g�͋�̃t�@�C��)��z�u���܂��B
2. �f�o�b�O��  
  `.debug` �t�@�C��(���g�͋�̃t�@�C��)��z�u���܂��B
3. �����[�X��  
  `.release` �t�@�C��(���g�͋�̃t�@�C��)��z�u���܂��B
  �������� `.local`  `.debug`  `.release` �̂�������z�u���Ȃ��悤�ɂ��܂��B
	   
�܂� `.local`  `.debug`  `.release` �����������ɑ��݂���ꍇ��
1 < 2 < 3 �̗D��x�ŗL���ɂȂ�������܂�܂��B
	  
