<?php
class M_usuario extends CI_Model{
	function __construct(){
		parent::__construct();
	    
		function getUsuarioLogin($s_usr, $s_pwd) {
		    $sql = "SELECT p.*,
	                   CASE WHEN p.foto_persona IS NOT NULL THEN CONCAT('".RUTA_SMILEDU."', p.foto_persona)
                            WHEN p.google_foto  IS NOT NULL THEN p.google_foto
                            ELSE '".RUTA_SMILEDU.FOTO_DEFECTO."' END AS foto_persona,
	                   CASE WHEN p.google_foto IS NOT NULL THEN 1
                            ELSE 0 END AS foto_select,
	                   CONCAT(INITCAP(SPLIT_PART(nom_persona, ' ', 1)),' ',ape_pate_pers,' ',SUBSTRING(ape_mate_pers,1, 1),'.' ) AS nombre_abvr,
                       pd.id_sede_control,
                       CASE WHEN (p.nro_documento = ?)
                            THEN 1
                            ELSE 0
                       END AS redirect_encuesta,
                       p.flg_cambiar_clave
	              FROM persona p LEFT JOIN rrhh.personal_detalle pd ON pd.id_persona = p.nid_persona
	             WHERE ( LOWER(p.usuario)     = LOWER(?)     OR
                         LOWER(p.correo_inst) = LOWER(?) OR
                         LOWER(p.correo_admi) = LOWER(?) )
	               AND (p.clave = (SELECT encrypt(?, ?, 'aes')) OR
                        ?       = (SELECT encrypt(?, ?, 'aes')) )
	               AND p.flg_acti         = '".FLG_ACTIVO."' LIMIT 1";
		    $result = $this->db->query($sql, array($s_usr, $s_usr, $s_usr, $s_usr, $s_pwd, $s_pwd, CLAVE, $s_pwd, $s_pwd));
		    return $result->row_array();
		}
		
		function getIngreso($s_usr, $s_pwd) {
		    $sql = "SELECT CASE WHEN (SELECT COUNT(*)
					                FROM persona p LEFT JOIN rrhh.personal_detalle pd ON pd.id_persona = p.nid_persona
					               WHERE ( LOWER(p.usuario) = LOWER(?)     OR
						                   LOWER(p.correo_inst) = LOWER(?) OR
                                           LOWER(p.correo_admi) = LOWER(?) )
					                 AND (p.clave  = (SELECT encrypt(?, ?, 'aes')) OR
                                          ?       = (SELECT encrypt(?, ?, 'aes')) )
					                 AND p.flg_acti         = '1' LIMIT 1) > 0 THEN '1'
		                    ELSE '0' END AS personal,
			           CASE WHEN (SELECT COUNT(*)
					                FROM familiar f
					               WHERE LOWER(f.usuario) = LOWER(?)
                                     AND (f.clave = (SELECT encrypt(?, ?, 'aes')) OR
                                          ?       = (SELECT encrypt(?, ?, 'aes')) ) ) > 0 THEN 1
			                ELSE '0' END AS familiar,
                       CASE WHEN (SELECT encrypt(? , ? , 'aes')) = ?
                            THEN 1
                            ELSE 0
                       END flg_clave";
		    $result = $this->db->query($sql, array($s_usr, $s_usr, $s_usr, $s_pwd, $s_pwd, CLAVE, $s_pwd, $s_pwd, $s_usr, $s_pwd, $s_pwd, CLAVE, $s_pwd, $s_pwd, $s_pwd, $s_pwd, CLAVE));
		    return $result->row_array();
		}
		
		function getRolesByuser($idUser) {
		    $sql = "SELECT DISTINCT r.nid_rol,
	                   r.desc_rol
	              FROM rol r,
	                   persona_x_rol pr,
            	       persona p,
            	       rol_x_sistema rs
                 WHERE p.nid_persona = ?
		           AND p.flg_acti    = '".FLG_ACTIVO."'
	               AND pr.flg_acti   = '".FLG_ACTIVO."'
		           AND r.nid_rol     = rs.nid_rol
                   AND r.nid_rol     = pr.nid_rol
                   AND p.nid_persona = pr.nid_persona";
		    $result = $this->db->query($sql,array($idUser));
		    return $result->result();
		}
	}
}