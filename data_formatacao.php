<?php
	// Formatando data "AAAA-MM-DD" para "DD/MM/AAAA"
	function databr($data){
		if ($data!='') {
	   		return (substr($data,8,2).'/'.substr($data,5,2).'/'.substr($data,0,4));
		}
		else {
			return '';
		}
	}	
	// Formatando data "AAAA-MM-DD HH:MM:SS" para "DD/MM/AAAA HH:MM"
	function datahorabr($data){
		if ($data!='') {
	   		return (substr($data,8,2).'/'.substr($data,5,2).'/'.substr($data,0,4).' '.substr($data,11,8));
		}
		else {
			return '';
		}
	}
	// Formatando data "AAAA-MM-DD HH:MM:SS" para "DD/MM/AAAA HH:MM:SS"
	function datahorafullbr($data){
		if ($data!='') {
	   		return (substr($data,6,2).'/'.substr($data,4,2).'/'.substr($data,0,4).' '.substr($data,8,2).':'.substr($data,10,2).':'.substr($data,12,2));
		}
		else {
			return '';
		}
	}
	// Formatando data "AAAA-MM-DD" para "DD"
	function databr_dia($data){
		if ($data!='') {
	   		return (substr($data,8,2));
		}
		else {
			return '';
		}
	}
	// Formatando data "AAAA-MM-DD" para "DD/MM"
	function databr_diames($data){
		if ($data!='') {
	   		return (substr($data,8,2).'/'.substr($data,5,2));
		}
		else {
			return '';
		}
	}
	// Formatando data "AAAA-MM-DD" para "MM/AAAA"
	function databr_mesano($data){
		if ($data!='') {
	   		return (substr($data,5,2).'/'.substr($data,0,4));
		}
		else {
			return '';
		}
	}
	// Passando data do banco "AAAA-MM-DD HH:MM:SS" para "HH:MM"
	function hora($data){
		if ($data!='') {
	   		return (substr($data,0,2).':'.substr($data,3,2));
		}
		else {
			return '';
		}
	}
?>