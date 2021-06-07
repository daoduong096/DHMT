#include <GL/glut.h>
void renderScene(void) {
	glBegin(GL_LINES);
	glColor3f(1.0, 0.0, 0.0);

	glVertex3f(-1.0, 0.0, 0.0);
	glVertex3f(1.0, 0.0, 0.0);

	glColor3f(0.0, 1.0, 0.0);
	glVertex3f(0.0, -1.0, 0.0);
	glVertex3f(0.0, 10.0, 0.0);

	glClear(GL_COLOR_BUFFER_BIT);
	glBegin(GL_TRIANGLES);
	glColor3f(1.0, 0.0, 0.0);

	glVertex3f(0.25, 0.0, 0.0);
	glVertex3f(0.75, 0.0, 0.0);

	glVertex3f(0.75, 0.0, 0.0);
	glVertex3f(0.5, 0.25, 0.0);

	glVertex3f(0.5, 0.25, 0.0);
	glVertex3f(0.25, 0.0, 0.0);
	glEnd();
	glFlush();
}
void main(int argc, char** argv) {
	glutInit(&argc, argv);
	glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB);
	glutInitWindowPosition(100, 100);
	glutInitWindowSize(320, 320);
	glutCreateWindow("ve tam giac");
	glutDisplayFunc(renderScene);
	glutMainLoop();
}