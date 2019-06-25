#ifndef _CAMERA_H
#define _CAMERA_H

#include<glad/glad.h>
#include<glm/glm.hpp>
#include<glm/gtc/matrix_transform.hpp>

#include<vector>

//����ƶ��ķ���
enum CAMERA_MOVETYPE {
	FORWARD,
	BACKWARD,
	LEFT,
	RIGHT,
};

//��������������ʼ���͸�λ��ʱ���õ�
const float YAW = -90.0f;
const float PITCH = 0.0f;
const float SPEED = 2.5f;
const float SENSITIVITY = 0.1f;
const float ZOOM = 45.0f;

//������OpenGL�������
class Camera {
public:
private:
};
#endif // !_CAMERA_H

