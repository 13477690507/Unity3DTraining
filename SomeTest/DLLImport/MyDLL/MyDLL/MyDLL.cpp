// MyDLL.cpp : ���� DLL Ӧ�ó���ĵ���������
//

#include "stdafx.h"
#include "MyDLL.h"

void SomeFunction(std::string &str)
{
	str += "Hello";
}

int Pow2(int num) {
	return num*num;
}

