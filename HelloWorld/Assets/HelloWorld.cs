using UnityEngine;
using System.Collections;

public class HelloWorld : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}

    // �ں���OnGUI�ж���UI�Ĳ��ֺ͹���
    void OnGUI()
    {

        // �ı��ַ��Ĵ�С
        GUI.skin.label.fontSize = 100;

        // �������
        GUI.Label( new Rect( 10, 10, Screen.width, Screen.height ), "Hello World" );
    }
}
