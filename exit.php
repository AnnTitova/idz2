<?php
session_start();
if (empty($_SESSION['login']) or empty($_SESSION['password'])) 
{
//���� �� ���������� ������ � ������� � �������, ������ �� ���� ���� ����� ���������� ������������. ��� ��� �� �����. ������ ��������� �� ������, ������������� ������
exit ("������ �� ��� �������� �������� ������ ������������������ �������������. ���� �� ����������������, �� ������� �� ���� ��� ����� ������� � �������<br><a href='cabinet.php'>������� ��������</a>");
}

unset($_SESSION['password']);
unset($_SESSION['login']); 
unset($_SESSION['id']);// ���������� ���������� � �������

exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
// ���������� ������������ �� ������� ��������.
?>