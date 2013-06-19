# REFERENCE ���t�@�����X

## �A�v���P�[�V�����\��

### ���f�B���N�g���\��

    app         :�A�v���P�[�V�����\�[�X�i�[�f�B���N�g��
    cache       :�e��L���b�V���t�@�C���i�[�f�B���N�g��
    log         :���O�t�@�C���i�[�f�B���N�g��
    documentroot:���J�p�f�B���N�g��
    mcweb       :MCWEB�t���[�����[�N�\�[�X�i�[�f�B���N�g��

## �e��ݒ�

���p���ɉ����Đݒ肵�Ă��炤�萔��`������ӏ��ɂ��Ă̐����ł��B

### ���V�X�e���ݒ� (app/define/user_config/user.define.ini.php)

* **USER_SYSTEM_TITLE**
  �V�X�e���^�C�g������ݒ肵�܂��B

* **USER_TOTAL_BUDGET_MANHOUR_EQUATION**
  ���\�Z���瑍�����H���̎Z�o����v�Z��
  eval�֐����g�p���Čv�Z���܂��B
  �u%1$d�v�̈ʒu�Ƀv���W�F�N�g�}�X�^�̑��\�Z���Z�b�g����܂��B
  �����_�ȉ��͎l�̌ܓ�����܂��B

  �ݒ��) `%1$d / 10`
  
#### ���͕��������ݒ�

* **USER_POST_NAME_MAX** ���������������

* **USER_MEMBER_CODE_MAX**
  �Ј��R�[�h���������
  
* **UUSER_MEMBER_CODE_MIN**
  �Ј��R�[�h���������
  
* **UUSER_MEMBER_CODE_FORMAT**
  �Ј��R�[�h�����i���K�\��/�s�v����''���Z�b�g�j
  
* **UUSER_MEMBER_NAME_MAX**
  �Ј������������
  
* **UUSER_MEMBER_PASSWORD_MAX**
  �p�X���[�h���������
  
* **UUSER_CLIENT_NAME_MAX**
  �N���C�A���g�����������

* **USER_CLIENT_MEMO_MAX**
  �N���C�A���g���l���������

* **UUSER_PROJECT_CODE_MAX**
  �v���W�F�N�g�R�[�h���������
  
* **USER_PROJECT_CODE_MIN**
  �v���W�F�N�g�R�[�h����������

* **USER_PROJECT_CODE_FORMAT**
  �v���W�F�N�g�R�[�h�����i���K�\��/�s�v����''���Z�b�g�j

* **USER_PROJECT_CODE_AUTO_CREATE**
  �v���W�F�N�g�R�[�h�����R�[�h�����i���R�[�h���Ɏg�p�j

* **USER_PROJECT_NAME_MAX**
  �v���W�F�N�g�����������
  
* **USER_PROJECT_NOUKI_MAX**
  �v���W�F�N�g�[�����������
  
* **USER_PROJECT_MEMO_MAX**
  �v���W�F�N�g���l���������
  
* **USER_MANHOUR_MEMO_MAX**
  �H���f�[�^���l���������

#### �G�N�Z���H���\�o��
* **USER_EXCEL_ROW_NUM**
  �o�͍s��

#### �L���b�V���L������

* **USER_CACHE_LOGIN_MEMBER_ID**
  ���O�C�����̏����\�����[�UID
  
* **USER_CACHE_LOGIN_STATE**
  ���O�C����Ԃ̕ێ�


### �����b�Z�[�W�ݒ� (app/define/user_config/user.message.csv)

* **USER_DUMMY_MESSAGE**
  ��`��ŃV�X�e���ł͎g�p���܂���B
  �V���ɒ�`��ǉ�����ꍇ�́A��`���ɂ͕K���uUSER_�v����n�܂�l��ݒ肵�Ă�������
  
* **USER_ERR_MESSAGE_PROJECT_CODE** �v���W�F�N�g�R�[�h�̏����G���[�����b�Z�[�W
  
* **USER_GUIDE_MESSAGE_PROJECT_CODE_FORMAT**  �v���W�F�N�g�R�[�h�̕\���p������`
  
* **USER_ERR_MESSAGE_MEMBER_CODE**  �Ј��R�[�h�̏����G���[�����b�Z�[�W
  
* **USER_GUIDE_MESSAGE_MEMBER_CODE_FORMAT**  �Ј��R�[�h�̕\���p������`

#### ����1�`6����

* **USER_AUTH_LV_NAME_1**  ����1����
  
* **USER_AUTH_LV_NAME_2**  ����2����
  
* **USER_AUTH_LV_NAME_3**  ����3����
  
* **USER_AUTH_LV_NAME_4**  ����4����
  
* **USER_AUTH_LV_NAME_5**  ����5����

* **USER_AUTH_LV_NAME_6**  ����6����

#### �����^�C�v1�`3����

* **USER_POST_TYPE_NAME_1**  �����^�C�v1
  
* **USER_POST_TYPE_NAME_2**  �����^�C�v2
  
* **USER_POST_TYPE_NAME_3**  �����^�C�v3


### ��ip�ш�̃t�B���^�����O�ݒ� (app/define/filter.txt)

�A�N�Z�X�\��IP�ш���`

##### �ݒ���@
  
$DEBUG�ȉ��ɐڑ���������IP�ш���`���܂��B
�܂��S�ẴA�N�Z�X��������ꍇ��*���w�肵�ĉ������B

�ݒ��1�j
127.0.0.1��192.168.1.*����̃A�N�Z�X��������ꍇ

    $DEBUG
    127.0.0.1/32
    192.168.1.0/24

�ݒ��2�j
���ׂẴA�N�Z�X��������ꍇ

    $DEBUG
    *

### ���V�X�e�����S�ݒ�

�V�X�e�����S�ݒ� �i�w�b�_���ネ�S�摜�j�̕ύX���\�ł��B

##### �ݒ���@
  `app/html/img/logo_header.gif`�̉摜�������ւ��邱�ƂŕύX�\