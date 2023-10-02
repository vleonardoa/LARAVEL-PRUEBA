import pandas as pd
import mysql.connector
from datetime import datetime

archivo_excel = 'DataPrueba.xlsx'

df = pd.read_excel(archivo_excel)


conexion = mysql.connector.connect(
    host='127.0.0.1',
    user='root',
    password='',
    database='micoopera'
)

cursor = conexion.cursor()


sentencia_sql_primera_tabla = """
    INSERT INTO CLIENTES (NOMBRES, APELLIDOS)
    VALUES (%s, %s)
"""

sentencia_sql_segunda_tabla = """
    INSERT INTO SOCIOS (ID_CLIENTE, DETALLE)
    VALUES (%s,%s)
"""
sentencia_sql_tercera_tabla = """
    INSERT INTO TARJETAS (NUMERO_TARJETA,ID_SOCIO, NOMBRE_TARJETA,FECHA_CON,MONTO,SALDO)
    VALUES (%s,%s,%s,%s,%s,%s)
"""


for indice, fila in df.iterrows():
    campo_combinado = f"{fila.iloc[2]} {fila.iloc[3]}"
    
    datos_primera_tabla = (fila.iloc[1], campo_combinado)


    try:
        cursor.execute(sentencia_sql_primera_tabla, datos_primera_tabla)

        id_generado = cursor.lastrowid

        datos_segunda_tabla = (id_generado,'Generado con phyton')
        cursor.execute(sentencia_sql_segunda_tabla, datos_segunda_tabla)


        id_socio = cursor.lastrowid

        nombre_combinado = f"{fila.iloc[1]} {fila.iloc[2]} {fila.iloc[3]}"

        fecha_date = fila.iloc[5].date()
        datos_tercera_tabla = (fila.iloc[4],id_socio,nombre_combinado,fecha_date,fila.iloc[6],fila.iloc[7])
        cursor.execute(sentencia_sql_tercera_tabla, datos_tercera_tabla)

        conexion.commit()

    except Exception as e:
        conexion.rollback()
        print(f"Error al insertar datos en la transacción: {e}")

cursor.close()
conexion.close()
